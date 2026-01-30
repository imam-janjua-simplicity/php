<?php

declare (strict_types=1);

use PhpKurs\Model\Profession;
use PhpKurs\Model\Human;

chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

$profession = new Profession(profession: 'Busfahrer'); 
$human = new Human(firstname: "Lukas", lastname: "sir", age: "11", profession: $profession );
echo $human->getFirstName();
