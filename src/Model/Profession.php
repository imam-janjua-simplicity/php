<?php
 
declare (strict_types=1);

namespace PhpKurs\Model;

class Profession
{
  public const PROFESSION = ['taxifahrer'=>'Busfahrer', 'developer'=>'Developer','lehrer'=> 'Lehrer'];
  private string $profession; 

    public function __construct(string $profession)
    {
      $this->validateProfession($profession);
    }

  private function validateProfession(string $profession): void 
  {
    if (!in_array($profession, self::PROFESSION)) {
      throw new \Exception('is no valid profession');
    }
  }
}
