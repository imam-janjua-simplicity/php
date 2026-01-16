<?php

declare (strict_types=1);
include "Human.php";
include "merchant.php";

$profession = new Profession(profession: 'Busfahrer'); 

$human = new Human(firstname: "Lukas", lastname: "sir", age: "11", profession: $profession );
echo $human->getFirstName();

$merchant = new Merchant("Mark", "Arendt", "33",profession: $profession, 0);
echo $merchant->getMoney();
echo $merchant->getFirstName();
