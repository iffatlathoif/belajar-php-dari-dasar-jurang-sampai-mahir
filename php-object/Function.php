<?php

require_once "data/Person.php";

$person = new Person("Iffat", null);
$person->name = "iffat";
$person->sayHello("Budi");

$joko = new Person("Joko", null);
$joko->name = "Joko";
$joko->sayHello(null);

$person->info();
$joko->info();