<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();


$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);
$customers = $statement->fetchAll();
var_dump($customers);

$connection = null;