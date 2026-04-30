<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $username, string $password)
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{

    // error karena final function tidak bisa di override di child class
    public function login(string $username, string $password)
    {
        return false;
    }
}