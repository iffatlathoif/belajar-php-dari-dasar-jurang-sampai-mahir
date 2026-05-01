<?php

require_once str_replace('\\', '/', __DIR__) . "/../Model/TodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/../Helper/Input.php";
require_once str_replace('\\', '/', __DIR__) . "/../BussinesLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x untuk keluar) ");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }

}