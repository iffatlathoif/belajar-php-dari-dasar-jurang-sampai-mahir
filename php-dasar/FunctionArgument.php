<?php
function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Muhamad");
sayHello("Iffatullathoif");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;

}

sum(1, 2);
sum("100", "100");
sum(true, false);
// sum([], []);

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1,2,3,4,5);

$values = [1,2,3,4,5];
sumAll(...$values);