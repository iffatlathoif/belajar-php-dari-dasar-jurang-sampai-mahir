<?php

// php 8.2 default value hrus di paling akhir
function sayHello(string $first, string $middle, string $last = ""): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// named argument
sayHello(last: "Lathoif", first: "Muhamad", middle: "Iffatul");
sayHello(first: "Muhamad", middle: "Iffatul");