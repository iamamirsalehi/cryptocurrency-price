<?php

namespace Iamamirsalehi;

use Iamamirsalehi\Helpers\Classes;
use Iamamirsalehi\Helpers\StringFormater;

class CryptoCurrencies
{
    public static function __callStatic($name, $arguments)
    {
        $class_name = StringFormater::makeItUppercase($name);
        
        $class_full_name = StringFormater::makeTheFirstLetterUppercase($class_name);

        if(Classes::checkClassExists($class_full_name))
            
    }
}