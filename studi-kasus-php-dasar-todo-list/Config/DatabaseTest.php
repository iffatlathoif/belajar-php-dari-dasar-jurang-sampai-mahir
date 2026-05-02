<?php
$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/Database.php";

$db = \Config\Database::getConnection();
echo "Sukses membuat koneksi kedatabase";