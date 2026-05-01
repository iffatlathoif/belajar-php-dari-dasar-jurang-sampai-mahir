<?php

require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";

addTodoList("Muhamad");
addTodoList("Iffatul");
addTodoList("Lathoif");

viewShowTodoList();