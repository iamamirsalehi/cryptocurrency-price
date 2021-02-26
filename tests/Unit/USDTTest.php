<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class USDTTest extends TestCase
{
    public function test_if_crawler_can_get_usdt_long_price()
    {
        $usdt_long_price = CryptoCurrencies::usdt()->long();

        $this->assertNotNull($usdt_long_price);
        $this->assertIsNumeric($usdt_long_price);
    }

    public function test_if_crawler_can_get_usdt_short_price()
    {
        $usdt_short_price = CryptoCurrencies::usdt()->short();

        $this->assertNotNull($usdt_short_price);
        $this->assertIsNumeric($usdt_short_price);
    }
}