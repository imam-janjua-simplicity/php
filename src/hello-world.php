<?php
declare (strict_types=1);
include "Human.php"

$human = Human();    

for ($i = 1; $i <= 3; $i++) {
    $firstname = readline('Vorname?: ');
    $lastname = readline('Nachname?: ');
    $age = readline('Alter?: ');
    $profession = readline('Beruf?: ');

    if (!$age || !$firstname || !$lastname || !$profession) {
        throw new \Exception('Fehler');
    }

    if (is_numeric($firstname) || is_numeric($lastname) || is_numeric($profession)) {
        throw new \Exception('Fehler: Zahl!!!'); 
    }

    if (!is_numeric($age)) {
        throw new \Exception('Is not a number');
    }

    if (empty($firstname) || empty($lastname) || empty($age) || empty($profession)) {
        throw new \Exception('Not allowed to be empty');
    }

    $human->sayName($firstname, $lastname);
    $human->sayAge((int)$age);
    $human->sayProfession($profession);

}

