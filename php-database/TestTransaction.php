<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('iffat@gmail.com','hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('iffat@gmail.com','hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('iffat@gmail.com','hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('iffat@gmail.com','hi')");
$connection->exec("INSERT INTO comments(emails, comment) VALUES('iffat@gmail.com','hi')");

$connection->commit();
$connection = null;