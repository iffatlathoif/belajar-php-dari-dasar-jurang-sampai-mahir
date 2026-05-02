<?php

$dir = str_replace('\\', '/', __DIR__);

require_once $dir . "/../Entity/TodoList.php";
require_once $dir . "/../Repository/TodoListRepository.php";
require_once $dir . "/../Service/TodoListService.php";
require_once $dir . "/../View/TodoListView.php";
require_once $dir . "/../Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListView->showTodoList();
}

function testViewAddTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListView->addTodoList();
    $todoListView->showTodoList();
}

function testViewRemoveTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP Dasar");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListView->removeTodoList();
    $todoListView->showTodoList();
    $todoListView->removeTodoList();
    $todoListView->showTodoList();

}

testViewRemoveTodoList();