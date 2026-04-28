<?php

function sayHello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("Muhamad", "strtoupper");
sayHello("Muhamad", "strtolower");
sayHello("Iffatullathoif", function (string $name): string {
    return strtoupper($name);
});
sayHello("Iffat", fn($name) => strtoupper($name));