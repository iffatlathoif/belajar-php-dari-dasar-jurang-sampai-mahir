<?php

require_once __DIR__ . "\\vendor\autoload.php";
use Iffat\BelajarPHPComposer\Data\People;

$people = new People("Iffat");
echo $people->sayHello("Budi") . PHP_EOL;