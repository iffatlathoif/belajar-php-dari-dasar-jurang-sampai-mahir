<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/BussinesLogic/RemoveTodoList.php";

addTodoList("Muhamad");
addTodoList("Iffatul");
addTodoList("Lathoif");

showTodoList();

removeTodoList(1);
showTodoList();

$success = removeTodoList(5);
var_dump($success);