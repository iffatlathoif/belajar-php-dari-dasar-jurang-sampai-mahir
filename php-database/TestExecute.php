<?php
$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";

$connection = getConnection();
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("iffat","Iffat","iffat@gmail.com");
SQL;
$connection->exec($sql);
$connection = null;