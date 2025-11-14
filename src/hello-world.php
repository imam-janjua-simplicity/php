<?php

declare (strict_types=1);
include "Human.php";

$human = new Human($firstname = "Lukas", $lastname = "sir", $age = "11", $profession = "JC");
echo $human->getFirstName();



