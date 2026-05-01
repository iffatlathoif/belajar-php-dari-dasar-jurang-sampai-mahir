<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();

$username = "budi";
$password = "rahasia";
$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;