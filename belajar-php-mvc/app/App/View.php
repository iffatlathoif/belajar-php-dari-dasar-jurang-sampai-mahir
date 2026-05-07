<?php

namespace Iffat\Belajar\PHP\MVC\App;

class View
{
    public static function render(string $view, $model)
    {
        require __DIR__ . DIRECTORY_SEPARATOR . "../view/" . $view . ".php";
    }
}