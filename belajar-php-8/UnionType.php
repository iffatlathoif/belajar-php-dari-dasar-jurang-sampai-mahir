<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Iffat";
$example->data = 20;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } elseif (is_string($data)) {
        return "string";
    }
    return "";
}

sampleFunction("Iffat");
sampleFunction([]);