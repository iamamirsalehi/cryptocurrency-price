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

    public static function findUppercaseCharacterAndMakeItLowerAdPutADashBehandIt($coin)
    {
        $coin_name = CryptoCurrentciesType::convertCoinAggregateToFullName($coin);

        $maches = null;

        preg_match("/[A-Z]/", $coin_name, $maches);

        $character = $maches[0] ?? null; 

        if(is_string($character))
        {
            return str_replace($character, '-' . strtolower($character), $coin_name);
        }

        return false;
    }
}