<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

// $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
// $statement->bindParam("username", $username);
$statement->bindParam(1, $username);
// $statement->bindParam("password", $password);
$statement->bindParam(2, $password);
$statement->execute();
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