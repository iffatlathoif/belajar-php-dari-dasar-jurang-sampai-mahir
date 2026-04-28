<?php

$name = "Muhamad Iffatullathoif";
echo "Name : ".$name.PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// jika konversi salah tidak error cuma jadi default nilai misal
$valueSalah = (int)"salah";
$valueSalah2 = (string)true;
$valueSalah3 = (boolean)10;
var_dump($valueSalah);

// jadi angka 1
var_dump($valueSalah2);

// jika 10 dapat true karna ada nilai nya jika 0 jadi false
var_dump($valueSalah3);

$nama = "iffat";
echo $nama[0].PHP_EOL;
echo $nama[1].PHP_EOL;
echo $nama[2].PHP_EOL;
echo $nama[3].PHP_EOL;
echo $nama[4].PHP_EOL;

// bisa variable parsing dengan titik atau tanpa titik dengan $
echo "Hello " .$nama. " Selamat Belajar PHP".PHP_EOL;
echo "Hello $nama Selamat Belajar PHP".PHP_EOL;

// bisa variable parsing dengan curly brace
$var = "var";
echo "This is {$var}s".PHP_EOL;
