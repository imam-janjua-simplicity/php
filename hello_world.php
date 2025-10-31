<?php
declare (strict_types=1);

$firstname = readline('Vorname?: ');
$lastname = readline('Nachname?: ');
$age = readline('Alter?: ');
$profession = readline('Beruf?: ');

if ($age === false || $firstname === false || $lastname === false || $profession === false) {
  throw new \Exception('Fehler');
}

if(is_numeric($firstname) || is_numeric($lastname)){
  throw new \Exception('Fehler: Zahl!!!') 
}

function sayName(string $firstname, string $lastname)
{
  echo " $firstname $lastname";
}

function sayAge(int $age)
{
  echo "\n $age";
}

function sayProfession(string $profession)
{
  echo "\n $profession";
}

sayName($firstname, $lastname);
sayAge((int)$age);
sayProfession($profession);

