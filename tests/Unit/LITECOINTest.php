<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class LITECOINTest extends TestCase
{
    public function test_if_crawler_can_get_litecoin_long_price()
    {
        $litecoin_long_price = CryptoCurrencies::litecoin()->long();

        $this->assertNotNull($litecoin_long_price);
        $this->assertIsNumeric($litecoin_long_price);
    }

    public function test_if_crawler_can_get_litecoin_short_price()
    {
        $litecoin_short_price = CryptoCurrencies::litecoin()->short();

        $this->assertNotNull($litecoin_short_price);
        $this->assertIsNumeric($litecoin_short_price);
    }
}