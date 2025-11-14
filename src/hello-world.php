<?php
declare (strict_types=1);
include 'Human.php';

$human = new Human(firstname: 'Lukas', lastname: 'sir');
echo $human->getAge();
echo $human->getProfession();


$human = new Human(firstname: 'Lukas', lastname: 'sir', profession: 'Bürgergeld');
echo $human->getAge();
echo $human->getProfession();

$human = new Human(firstname: 'Lukas', lastname: 'sir', age: 11);
echo $human->getAge();
echo $human->getProfession();

$human = new Human(profession: 'King');
echo $human->getAge();
echo $human->getProfession();
