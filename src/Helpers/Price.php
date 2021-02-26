<?php

namespace Iamamirsalehi\Helpers;

class Price 
{
    public static function removeTomanTextFromPrice(string $price)
    {
        if(str_contains($price, 'تومان'))
            return filter_var(str_replace('تومان', '', $price), FILTER_SANITIZE_NUMBER_INT);
        return $price;
    } 
}