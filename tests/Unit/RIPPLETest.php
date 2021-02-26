<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class RIPPLETest extends TestCase
{
    public function test_if_crawler_can_get_ripple_long_price()
    {
        $ripple_long_price = CryptoCurrencies::ripple()->long();

        $this->assertNotNull($ripple_long_price);
        $this->assertIsNumeric($ripple_long_price);
    }

    public function test_if_crawler_can_get_ripple_short_price()
    {
        $ripple_short_price = CryptoCurrencies::ripple()->short();

        $this->assertNotNull($ripple_short_price);
        $this->assertIsNumeric($ripple_short_price);
    }
}