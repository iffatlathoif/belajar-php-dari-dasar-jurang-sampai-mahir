<?php

require_once str_replace('\\', '/', __DIR__) . "/../Model/TodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/../BussinesLogic/ShowTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/../View/ViewAddTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/../View/ViewRemoveTodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa lagi." . PHP_EOL;
}