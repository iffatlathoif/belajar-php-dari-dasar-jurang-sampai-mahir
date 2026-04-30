<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Iffat");
var_dump($company);
$company->programmer = new BackendProgrammer("Iffat");
var_dump($company);
$company->programmer = new FrontendProgrammer("Iffat");
var_dump($company);

sayHelloProgrammer(new Programmer("Iffat"));
sayHelloProgrammer(new BackendProgrammer("Iffat"));
sayHelloProgrammer(new FrontendProgrammer("Iffat"));