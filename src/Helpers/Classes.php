<?php

namespace Iamamirsalehi\Helpers;

use Iamamirsalehi\Helpers\StringFormater;

class Classes 
{
    public static function getFullClassName(string $class_name, string $class_folder):string
    {
        $folder_name = StringFormater::makeTheFirstLetterUppercase($class_folder);

        $class_full_name = 'Iamamirsalehi\\' . $folder_name . '\\' . $class_name . '.php';

        return $class_full_name;
    }

    public function checkClassExists(string $class_name):string
    {
        return class_exists($class_name);
    }
}