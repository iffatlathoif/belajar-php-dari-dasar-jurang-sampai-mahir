<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/BussinesLogic/ShowTodoList.php";

addTodoList("Muhamad");
addTodoList("Iffatul");
addTodoList("Lathoif");

showTodoList();

viewRemoveTodoList();

showTodoList();