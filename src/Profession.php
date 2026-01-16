<?php 

class Profession
{
  public const PROFESSION = ['Busfahrer', 'Developer', 'Lehrer'];
  private string $profession; 

    public function __construct(string $profession)
    {
      $this->validateProfession($profession);
    }

  private function validateProfession(string $profession): void 
  {
    if (!in_array($profession, self::PROFESSION)) {
      throw new \Exception('is not valid profession');
    }
  }
}
