<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\Helpers\StringFormater;

class StringFormaterTest extends TestCase
{
    public function test_ensure_makeituppercase_method_returns_uppercased_string()
    {
        $uppercase_string = StringFormater::makeItUppercase('iamamirsalehi');

        $this->assertNotNull($uppercase_string);
        $this->assertEquals('IAMAMIRSALEHI', $uppercase_string);
    }

    public function test_ensure_makeituppercase_method_does_not_return_uppercased_string()
    {
        $uppercase_string = StringFormater::makeItUppercase('iamamirsalehi');

        $this->assertNotNull($uppercase_string);
        $this->assertNotEquals('iamamirsalehi', $uppercase_string);
    }

    public function test_ensure_makethefirstletteruppercase_method_returns_first_letter_uppercased_string()
    {
        $uppercase_string = StringFormater::makeTheFirstLetterUppercase('iamamirsalehi');

        $this->assertNotNull($uppercase_string);
        $this->assertEquals('Iamamirsalehi', $uppercase_string);
    }

    public function test_ensure_makethefirstletteruppercase_method_does_not_return_first_letter_uppercased_string()
    {
        $uppercase_string = StringFormater::makeTheFirstLetterUppercase('iamamirsalehi');

        $this->assertNotNull($uppercase_string);
        $this->assertNotEquals('iamamirsalehi', $uppercase_string);
    }
}