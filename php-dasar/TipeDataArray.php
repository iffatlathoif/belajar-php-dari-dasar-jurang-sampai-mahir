<?php
$values = array(10,9,8,7.5);
var_dump($values);

$names = ["Muhamad", "Iffatullathoif"];
var_dump($names);

var_dump($names[0]);

$names[0] = "M";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Iffat";
var_dump($names);
var_dump(count($names));

// array dan map di php sama
$iffat = array(
    0 => "Muhamad",
    1 => "Iffatullathoif",
    2 => 20
);

$iffat2 = array(
    "id" => "1",
    "name" => "Iffatullathoif",
    "age" => 20
);

var_dump($iffat2["id"]);
var_dump($iffat[0]);

// bisa mendeklarasikan seperti ini
$latif = [
    "id" => "1",
    "name" => "Lathoif",
    "age" => 20
];

// array dalam array
$iffat3 = array(
    "id" => "1",
    "name" => "Iffatullathoif",
    "age" => 20,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);

$latif = [
    "id" => "1",
    "name" => "Lathoif",
    "age" => 20,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];

var_dump($latif["address"]["city"]);