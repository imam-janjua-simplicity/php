<?php
use PHPunit\Framework\TestCase;

include "src/Human.php";

class HumanTest extends TestCase
{
  public function testCreateHuman()
  {
    
    $this->expectExceptionMessage("Firstname is empty");
    $human = new Human("", "Weidel", "18", "Legende");
  }

}

