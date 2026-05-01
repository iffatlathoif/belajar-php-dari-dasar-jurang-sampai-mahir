<?php

require_once str_replace('\\', '/', __DIR__) . "/../Helper/Input.php";
require_once str_replace('\\', '/', __DIR__) . "/../BussinesLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");
    $success = removeTodoList($pilihan);

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}