<?php

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;
require_once str_replace('\\', '/', __DIR__) . "/Entity/TodoList.php";
require_once str_replace('\\', '/', __DIR__) . "/Helper/InputHelper.php";
require_once str_replace('\\', '/', __DIR__) . "/Repository/TodoListRepository.php";
require_once str_replace('\\', '/', __DIR__) . "/Service/TodoListService.php";
require_once str_replace('\\', '/', __DIR__) . "/View/TodoListView.php";

echo "Aplikasi TodoList" . PHP_EOL;
$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();