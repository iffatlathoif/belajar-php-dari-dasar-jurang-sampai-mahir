<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "hi bro";
} else {
    $hi = "hi nona";
}


// ini adalah simple menggunakan ternary operator
$hi = $gender == "PRIA" ? "hi bro" : "hi nona";

echo $hi;