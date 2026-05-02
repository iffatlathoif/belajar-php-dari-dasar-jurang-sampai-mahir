<?php

$dir = str_replace('\\', '/', __DIR__);

require_once $dir . "/../Entity/TodoList.php";
require_once $dir . "/../Repository/TodoListRepository.php";
require_once $dir . "/../Service/TodoListService.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListSevice = new TodoListServiceImpl($todoListRepository);

    $todoListSevice->showTodoList();
}

function testAddTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");
    $todoListService->showTodoList();
}

function testRemoveTodoList()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();

}

testRemoveTodoList();

