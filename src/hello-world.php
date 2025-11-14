<?php

declare (strict_types=1);
include "Human.php";
include "merchant.php";

$human = new Human(firstname: "Lukas", lastname: "sir", age: "11", profession: "JC");
echo $human->getFirstName();

$merchant = new Merchant("Mark", "Arendt", "33", "IT", 0);
echo $merchant->getMoney();
echo $merchant->getFirstName();
