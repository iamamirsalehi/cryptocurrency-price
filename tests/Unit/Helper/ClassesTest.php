<?php

use Iamamirsalehi\Helpers\Classes;
use PHPUnit\Framework\TestCase;

class ClassesTest extends TestCase
{
    public function test_ensure_getfullclassname_return_full_class_name()
    {
        $class_full_name = Classes::getFullClassName('tether', 'crawler');

        $this->assertNotNull($class_full_name);
        
        $this->assertEquals('Iamamirsalehi\\Crawler\\TETHER', $class_full_name);

        return $class_full_name;
    }

    public function test_ensure_getfullclassname_does_not_return_full_class_name()
    {
        $class_full_name = Classes::getFullClassName('tether_error', 'crawler');

        $this->assertNotNull($class_full_name);

        $this->assertNotEquals('Iamamirsalehi\\Crawler\\TETHER', $class_full_name);
    }

    /**
     * @depends test_ensure_getfullclassname_return_full_class_name
     */
    public function test_ensure_checkclassexists_function_return_that_the_given_class_exists($class_full_name)
    {
        $does_class_exist = Classes::checkClassExists($class_full_name);
    
        $this->assertNotNull($does_class_exist);

        $this->assertEquals($does_class_exist, true);
    }

    /**
     * @depends test_ensure_getfullclassname_return_full_class_name
     */
    public function test_ensure_checkclassexists_function_return_that_the_given_class_does_not_exists($class_full_name)
    {
        $does_class_exist = Classes::checkClassExists($class_full_name . 'sdfhj');
    
        $this->assertNotNull($does_class_exist);

        $this->assertEquals($does_class_exist, false);
    }
}