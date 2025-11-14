<?php

class Human
{
    protected string $firstname;
    private string $lastname;
    private string $age;
    private string $profession;

    public function __construct(string $firstname, string $lastname, string $age, string $profession)
    {
        $this->validateFirstName($firstname);
        $this->validateLastName($lastname);
        $this->validateAge($age);
        $this->validateProfession($profession);

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

    public function getProfession(): string
    {
        return $this->profession;
    }

    private function validateFirstName(string $firstname): void
    {
        if (!$firstname) {
            throw new \Exception('Firstname is false');
        }

        if (empty($firstname)) {
            throw new \Exception('Firstname is empty');
        }

        if (is_numeric($firstname)) {
            throw new \Exception('Firstname is a number');
        }
    }

    private function validateLastName(string $lastname): void
    {
        if (!$lastname) {
            throw new \Exception('lastname is false');
        }

        if (empty($lastname)) {
            throw new \Exception('lastname is empty');
        }

        if (is_numeric($lastname)) {
            throw new \Exception('lastname is a number');
        }
    }

    private function validateAge(string $age): void
    {
        if (!$age) {
            throw new \Exception('age is false');
        }

        if (empty($age)) {
            throw new \Exception('age is empty');
        }

        if (!is_numeric($age)) {
            throw new \Exception('age is not a number');
        }
    }

    private function validateProfession(string $profession): void
    {
        if (!$profession) {
            throw new \Exception('profession is false');
        }

        if (empty($profession)) {
            throw new \Exception('profession is empty');
        }

        if (is_numeric($profession)) {
            throw new \Exception('profession is a number');
        }
    }


}
