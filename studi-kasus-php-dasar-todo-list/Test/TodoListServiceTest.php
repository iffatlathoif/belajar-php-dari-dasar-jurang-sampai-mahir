<?php

$dir = str_replace('\\', '/', __DIR__);

require_once $dir . "/../Entity/TodoList.php";
require_once $dir . "/../Repository/TodoListRepository.php";
require_once $dir . "/../Service/TodoListService.php";
require_once $dir . "/../Config/Database.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListSevice = new TodoListServiceImpl($todoListRepository);

    $todoListSevice->showTodoList();
}

function testAddTodoList()
{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");
    // $todoListService->showTodoList();
}

function testRemoveTodoList()
{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    echo $todoListRepository->remove(5) . PHP_EOL;

}

testAddTodoList();

