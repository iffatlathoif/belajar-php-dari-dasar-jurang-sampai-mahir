<?php

function sum(int $first, int $last)
{
    return $first + $last;
}

$result = sum(10, 10);
var_dump($result);


// function return type declaration
function sum1(int $first, int $last) :int
{
    return $first + $last;
}

$result = sum1(10, 10);
var_dump($result);