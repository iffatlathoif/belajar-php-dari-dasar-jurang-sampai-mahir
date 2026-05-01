<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("admin");
$password = $connection->quote("admin");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";
$statement = $connection->query($sql);
$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Success login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;