<?php

namespace Iamamirsalehi;

use Iamamirsalehi\Helpers\Classes;
use Iamamirsalehi\Helpers\StringFormater;
use Iamamirsalehi\Exceptions\CryptoCurrencyNotFoundException;

class CryptoCurrencies
{
    public static function __callStatic($name, $arguments)
    {
        $class_name = StringFormater::makeItUppercase($name);
        
        $class_full_name = Classes::getFullClassName($class_name, 'crawler');

        if(!Classes::checkClassExists($class_full_name))
            throw new CryptoCurrencyNotFoundException();

        $called_class = new $class_full_name();

        return $called_class;
    }
}