<?php

namespace Iffat\Belajar\PHP\MVC\Controller;
use Iffat\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar MVC"
        ];
        View::render("home/index", $model);
    }
    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Muhamad Iffatullthoif";
    }
}