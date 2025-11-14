<?php

class Human 
{
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

   public function getAge(): int
    {
        return $this->age;
    }

   public function getProfession(): string
    {
        return $this->profession;
   }

  private function validateFirstName(string $firstname)
  {
    if (empty($firstname))
    {
      throw new \Exception('Firstname is empty');
    }

    if (is_numeric($firstname))
    {
      throw new \Exception('Firstname is a number');
    }
  }

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

}





