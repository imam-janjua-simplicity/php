<?php

class Human
{
<<<<<<< HEAD
  private string $firstname;
  private string $lastname;
  private int $age; 
  private string $profession;

  public function __construct(string $firstname = 'Lukas', string $lastname = 'Sir', int $age = 12, string $profession = 'JC')
  {
    $this->validateFirstName($firstname);
    $this->validateLastName($lastname);
    $this->validateAge($age);
    $this->validateProfession($profession);
=======
    private string $firstname;
    private string $lastname;
    private string $age;
    private string $profession;

    public function __construct(string $firstname, string $lastname, string $age, string $profession)
    {
        $this->validateFirstName($firstname);
        $this->validateLastName($lastname);
        $this->validateAge($age);
        $this->validateProfession($profession);
>>>>>>> 75c6fe2bb11174b2903706c808c5657e5423a973

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

<<<<<<< HEAD
   public function getAge(): int
=======
    public function getAge(): string
>>>>>>> 75c6fe2bb11174b2903706c808c5657e5423a973
    {
        return $this->age;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

<<<<<<< HEAD
  private function validateFirstName(string $firstname)
  {
    if (empty($firstname))
=======
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
>>>>>>> 75c6fe2bb11174b2903706c808c5657e5423a973
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

<<<<<<< HEAD
    private function validateLastName(string $lastname)
  {
    if (empty($lastname))
    {
      throw new \Exception('lastname is empty');
    }

    if (is_numeric($lastname))
    {
      throw new \Exception('lastname is a number');
    }
    }

  private function validateAge(int $age)
  {
    if (empty($age))
    {
      throw new \Exception('age is empty');
    }

    if ($age < 0 || $age > 150)
    {
      throw new \Exception('age is not in range');
    }
  }

  private function validateProfession(string $profession)
  {
    if (empty($profession))
    {
      throw new \Exception('profession is empty');
    }

    if (is_numeric($profession))
    {
      throw new \Exception('profession is a number');
    }
  }

=======
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


>>>>>>> 75c6fe2bb11174b2903706c808c5657e5423a973
}
