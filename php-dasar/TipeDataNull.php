<?php
$nama = "Budi";
$age = 20;

$nama = null;
$age = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Nama null? : ";
// echo is_null($nama);
var_dump(is_null($nama));
echo "\n";

// menghapus variable 
$contoh = "Koko";
unset($contoh);
echo $contoh;

// memastikan variable ada atau tidak
var_dump(isset($contoh));