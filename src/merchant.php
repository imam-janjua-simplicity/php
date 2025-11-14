<?php

class Merchant extends Human
{
  private int $money;

    public function __construct(string $firstname, string $lastname, string $age, string $profession, int $money)
    {
        parent::__construct($firstname, $lastname, $age, $profession);
        $this->money = $money;
    }

  public function getMoney(): int
  {
    return $this->money;
  }

  public function getFirstName(): string
  {
    return "Sir $this->firstname";
  }

}

