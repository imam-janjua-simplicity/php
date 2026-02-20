<?php

declare (strict_types=1);

namespace PhpKurs\Model;

class Human
{
    protected string $firstname;
    private string $lastname;
    private string $age;
    private Profession $profession;

    public function __construct(string $firstname, string $lastname, string $age, Profession $profession)
    {
        $this->validateFirstName($firstname);
        $this->validateLastName($lastname);
        $this->validateAge($age);

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->profession = $profession;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }

    public function getLastName(): string
    {
        return $this->lastname;
    }
     
    public function getAge(): string
    {
        return $this->age;
    }

    public function getProfession(): Profession
    {
        return $this->profession;
    }

    private function validateFirstName(string $firstname): void
    {
        if (empty($firstname)) {
            throw new \Exception('Firstname is empty');
        }

        if (is_numeric($firstname)) {
            throw new \Exception('Firstname is a number');
        }
    }

    private function validateLastName(string $lastname): void
    {
        if (empty($lastname)) {
            throw new \Exception('lastname is empty');
        }

        if (is_numeric($lastname)) {
            throw new \Exception('lastname is a number');
        }
    }

    private function validateAge(string $age): void
    {
        if (empty($age)) {
            throw new \Exception('age is empty');
        }

        if (!is_numeric($age)) {
            throw new \Exception('age is not a number');
        }
    }
}



