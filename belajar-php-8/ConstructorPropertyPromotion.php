<?php

class Product
{
    // public string $id;
    // public string $name;
    // public int $price;
    // public int $quantity;
    // constructor property promotion dengan meambahka access modiefie di parameter constructr

    public function __construct(public string $id, public string $name, public int $price, public int $quantity)
    {
        // $this->id = $id;
        // $this->name = $name;
        // $this->price = $price;
        // $this->quantity = $quantity;
    }
}