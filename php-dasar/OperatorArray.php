<?php

$first = [
    "first_name" => "Muhamad"
];

$last = [
    "last_name" => "Iffat"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Muhamad",
    "last_name" => "Iffat"
];

$b = [
    "last_name" => "Iffat",
    "first_name" => "Muhamad"
];

var_dump($a == $b);
var_dump($a === $b);