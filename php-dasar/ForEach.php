<?php

$names = ["Muhamad", "Iffatullathoif"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// foreach dengan key value
$person = [
    "first_name" => "Muhamad",
    "last_name" => "Iffatullathoif",
    "age" => 20
];

foreach ($person as $key => $value) {
    echo "$key : $value " . PHP_EOL;
}

// jika butuh index
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}