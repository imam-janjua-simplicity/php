<?php
declare (strict_types=1);
include "Human.php";

$human = new Human($firstname = "Lukas", $lastname = "sir", $age = "11", $profession = "JC");
echo $human->getFirstName();


/* for ($i = 1; $i <= 3; $i++) {
    $firstname = readline('Vorname?: ');
    $lastname = readline('Nachname?: ');
    $age = readline('Alter?: ');
    $profession = readline('Beruf?: ');

    $human = new Human($firstname, $lastname, $age, $profession);

    $human->sayName();
    $human->sayAge();
    $human->sayProfession();
} */

