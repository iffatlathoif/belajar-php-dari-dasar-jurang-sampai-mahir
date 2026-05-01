<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();
$connection->exec("INSERT INTO comments(email, comment) VALUES('iffat@gmail.com','hi')");
$id = $connection->lastInsertId();
echo $id . PHP_EOL;

$connection = null;