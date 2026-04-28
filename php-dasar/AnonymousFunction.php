<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Muhamad");
$sayHello("Iffatullathoif");

function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBye("Muhamad", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Iffatullathoif", $filterFunction);

$firstName = "Muhamad";
$lastName = "Iffatullathoif";

$sayHelloIffat = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloIffat();
$firstName = "Budi";
$lastName = "Nugroho";

$sayHelloIffat();
