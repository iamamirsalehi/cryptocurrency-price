<?php

namespace Iamamirsalehi\Exceptions;

use Exception;
use Iamamirsalehi\Exceptions\Codes;

class CryptoCurrencyNotFoundException extends Exception
{
    protected $code = Codes::CRYPTOCURRENCY_NOT_FOUND;

    protected $message = 'The cryptocurrency that you called does not exists';
}