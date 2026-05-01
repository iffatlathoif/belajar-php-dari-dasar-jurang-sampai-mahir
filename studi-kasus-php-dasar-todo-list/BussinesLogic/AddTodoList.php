<?php

/**
 * Menambahkan todo ke list
 * @return void
 */
function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeOf($todoList) + 1;

    $todoList[$number] = $todo;
}