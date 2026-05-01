<?php
require_once str_replace('\\', '/', __DIR__) . "/Model/TodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/BussinesLogic/ShowTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/BussinesLogic/AddTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/BussinesLogic/RemoveTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/View/ViewShowTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/View/ViewAddTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/View/ViewRemoveTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;
viewShowTodoList();