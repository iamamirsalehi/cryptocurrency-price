<?php

namespace Iamamirsalehi\Helpers;

use Iamamirsalehi\Helpers\StringFormater;

class Classes 
{
    public static function getFullClassName(string $class_name, string $class_folder):string
    {
        $class_name = StringFormater::makeItUppercase($class_name);

        $folder_name = StringFormater::makeTheFirstLetterUppercase($class_folder);

        $class_full_name = 'Iamamirsalehi\\' . $folder_name . '\\' . $class_name;

        return $class_full_name;
    }

    public static function checkClassExists(string $class_name):bool
    {
        return class_exists($class_name);
    }
}