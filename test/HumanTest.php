<?php

use PHPUnit\Framework\TestCase;

include "src/Human.php";

class HumanTest extends TestCase
{
    // Valid data that we can reuse
    private $validFirstname = "Mark";
    private $validLastname = "Bauer";
    private $validAge = "69";
    private $validProfession = "Ultra HD MAX Developer";

    public function testCreateHumanWithValidData()
    {
        $human = new Human($this->validFirstname, $this->validLastname, $this->validAge, $this->validProfession);
        
        $this->assertEquals($this->validFirstname, $human->getFirstName());
        $this->assertEquals($this->validLastname, $human->getLastName());
        $this->assertEquals($this->validAge, $human->getAge());
        $this->assertEquals($this->validProfession, $human->getProfession());
    }

    public function testCreateHumanWithEmptyFirstname()
    {
        $this->expectExceptionMessage("Firstname is empty");
        
        new Human("", $this->validLastname, $this->validAge, $this->validProfession);
    }

    public function testCreateHumanWithNumericFirstname()
    {
        $this->expectExceptionMessage("Firstname is a number");
        
        new Human("123", $this->validLastname, $this->validAge, $this->validProfession);
    }

    public function testCreateHumanWithEmptyLastname()
    {
        $this->expectExceptionMessage("lastname is empty");
        
        new Human($this->validFirstname, "", $this->validAge, $this->validProfession);
    }

    public function testCreateHumanWithNumericLastname()
    {
        $this->expectExceptionMessage("lastname is a number");
        
        new Human($this->validFirstname, "123", $this->validAge, $this->validProfession);
    }

    public function testCreateHumanWithEmptyAge()
    {
        $this->expectExceptionMessage("age is empty");
        
        new Human($this->validFirstname, $this->validLastname, "", $this->validProfession);
    }

    public function testCreateHumanWithNonNumericAge()
    {
        $this->expectExceptionMessage("age is not a number");
        
        new Human($this->validFirstname, $this->validLastname, "abc", $this->validProfession);
    }

    public function testCreateHumanWithEmptyProfession()
    {
        $this->expectExceptionMessage("profession is empty");
        
        new Human($this->validFirstname, $this->validLastname, $this->validAge, "");
    }

    public function testCreateHumanWithNumericProfession()
    {
        $this->expectExceptionMessage("profession is a number");
        
        new Human($this->validFirstname, $this->validLastname, $this->validAge, "123");
    }
}
