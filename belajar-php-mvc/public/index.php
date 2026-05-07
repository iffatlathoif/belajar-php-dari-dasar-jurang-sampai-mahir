<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
use Iffat\Belajar\PHP\MVC\App\Router;
use Iffat\Belajar\PHP\MVC\Controller\HomeController;
use Iffat\Belajar\PHP\MVC\Controller\ProductController;
use Iffat\Belajar\PHP\MVC\Middleware\AuthMiddleware;

// Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductController::class, "categories");
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add("GET", "/", HomeController::class, "index");
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add("GET", "/world", HomeController::class, "world", [AuthMiddleware::class]);
Router::add("GET", "/about", HomeController::class, "about");

Router::run();