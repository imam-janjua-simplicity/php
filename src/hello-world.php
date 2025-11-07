<?php
declare (strict_types=1);
include "Human.php";


for ($i = 1; $i <= 3; $i++) {
    $firstname = readline('Vorname?: ');
    $lastname = readline('Nachname?: ');
    $age = readline('Alter?: ');
    $profession = readline('Beruf?: ');

    $human = new Human($firstname, $lastname, $age, $profession);

    $human->sayName();
    $human->sayAge();
    $human->sayProfession();


}

