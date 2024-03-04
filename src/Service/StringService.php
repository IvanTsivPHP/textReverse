<?php

namespace App\Service;
class StringService
{
    public static function reverseString(string $string): string
    {
        return strrev($string);
    }
}