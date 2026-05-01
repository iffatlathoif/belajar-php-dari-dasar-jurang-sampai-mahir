<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";

addTodoList("Muhamad");
addTodoList("Iffatul");
addTodoList("Lathoif");

var_dump($todoList);