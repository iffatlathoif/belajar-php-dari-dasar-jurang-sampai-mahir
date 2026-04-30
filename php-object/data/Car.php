<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintaince
{
    function isMaintaince(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, IsMaintaince
{

    public function drive(): void
    {
        echo "Drive avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintaince(): bool
    {
        return false;
    }
}