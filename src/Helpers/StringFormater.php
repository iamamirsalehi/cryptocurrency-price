<?php

namespace Iamamirsalehi\Helpers;

class StringFormater
{
    public static function makeItUppercase(string $string)
    {
        return strtoupper($string);
    }

    public static function makeTheFirstLetterUppercase(string $string)
    {
        return ucfirst($string);
    }
}