<?php

declare (strict_types=1);
include "Human.php";
include "merchant.php";

$human = new Human(firstname: "Lukas", lastname: "sir", age: "11", profession: "JC");
echo $human->getFirstName();

$merchant = new Merchant("Marc", "Lord", "33", "Zoo");
echo $merchant->getLastName();
