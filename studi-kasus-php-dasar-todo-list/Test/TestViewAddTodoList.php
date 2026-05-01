<?php

require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";

addTodoList("Muhamad");
addTodoList("Iffatul");
addTodoList("Lathoif");

viewAddTodoList();

showTodoList();