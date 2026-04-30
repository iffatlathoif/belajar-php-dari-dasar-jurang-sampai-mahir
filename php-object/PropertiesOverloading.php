<?php

class Zero
{

    private array $properties = [];
    public string $firstName = "Iffat";

    public function __get($name)
    {
        // echo "Access Property $name" . PHP_EOL;
        // return "CONTOH";
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        // echo "Set property $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        // return false;
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }
}

$zero = new Zero();
echo $zero->firstName . PHP_EOL;
echo $zero->middletName . PHP_EOL;
$zero->middleName = "Iffat";
isset($zero->middleName);
unset($zero->middleName);
$zero->firstName = "Muhamad";
$zero->middleName = "Iffatul";
$zero->lastName = "Lathoif";

echo "First Name: $zero->firstName" . PHP_EOL;
echo "Middle Name: $zero->middleName" . PHP_EOL;
echo "Last Name: $zero->lastName" . PHP_EOL;

$zero->sayHello("Iffat","Lathoif");
Zero::sayHello("Iffat","Lathoif");