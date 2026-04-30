<?php

require_once "data/Manager.php";

$budi = new Manager();
$budi->name = "Budi";
$budi->sayHello("Iffat");

$iffat = new VicePresident();
$iffat->name = "Iffat";
$iffat->sayHello("Budi");