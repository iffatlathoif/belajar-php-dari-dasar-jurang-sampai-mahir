<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Muhamad Iffatullathoif";
$person->address = "Jawa Tengah";
$person->country = "Indonesia";
var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", null);
$person2->name = "Budi";
$person2->address = "Jakarta";
$person2->country = "Indonesia";
var_dump($person2);