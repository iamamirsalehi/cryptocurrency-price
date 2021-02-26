<?php

namespace Iamamirsalehi;

use Iamamirsalehi\Helpers\Classes;
use Iamamirsalehi\Helpers\StringFormater;
use Iamamirsalehi\Exceptions\CryptoCurrencyNotFoundException;
use Iamamirsalehi\Helpers\CryptoCurrentciesType;

class CryptoCurrencies
{
    public static function __callStatic($name, $arguments)
    {        
        $class_full_name = Classes::getFullClassName($name, 'crawler');

        if(!Classes::checkClassExists($class_full_name))
            throw new CryptoCurrencyNotFoundException();

        $called_class = new $class_full_name(CryptoCurrentciesType::getCryptoCurrentciesType($name));

        return $called_class;
    }
}