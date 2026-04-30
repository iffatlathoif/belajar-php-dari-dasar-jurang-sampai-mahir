<?php

namespace Data\Traits;

trait sayGoodBye
{
    function goodBye(?string $name)
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    function hello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

trait All
{

    use sayGoodBye, sayHello, HasName, CanRun {
    // bisa di override    
    // hello as private;
    // goodBye as private;
    }

}

class Person
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}