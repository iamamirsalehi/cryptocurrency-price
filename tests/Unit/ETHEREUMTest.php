<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class ETHEREUMTest extends TestCase
{
    public function test_if_crawler_can_get_ethereum_long_price()
    {
        $ethereum_long_price = CryptoCurrencies::ethereum()->long();

        $this->assertNotNull($ethereum_long_price);
        $this->assertIsNumeric($ethereum_long_price);
    }

    public function test_if_crawler_can_get_ethereum_short_price()
    {
        $ethereum_short_price = CryptoCurrencies::ethereum()->short();

        $this->assertNotNull($ethereum_short_price);
        $this->assertIsNumeric($ethereum_short_price);
    }
}