<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionYangAkanDiPanggil = "foo";
$functionYangAkanDiPanggil();

function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Iffat", "sampleFunction");
sayHello("Iffat", "strtoupper");
sayHello("Iffat", "strtolower");