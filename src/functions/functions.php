<?php

if(!function_exists('hello')) {
    function hello(string $name)
    {
        return "Hello, $name!";
    }
}

if(!function_exists('palabraCapitalizada')) {
    function palabraCapitalizada(string $value): string
    {
        return ucfirst($value);
    }
}

if(!function_exists('minusculas')) {
    function minusculas(string $value): string
    {
        return strtolower($value);
    }
}