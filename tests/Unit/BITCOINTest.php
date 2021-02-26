<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class BITCOINTest extends TestCase
{
    public function test_if_crawler_can_get_bitcoin_long_price()
    {
        $bitcoin_long_price = CryptoCurrencies::bitcoin()->long();

        $this->assertNotNull($bitcoin_long_price);
        $this->assertIsNumeric($bitcoin_long_price);
    }

    public function test_if_crawler_can_get_bitcoin_short_price()
    {
        $bitcoin_short_price = CryptoCurrencies::bitcoin()->short();

        $this->assertNotNull($bitcoin_short_price);
        $this->assertIsNumeric($bitcoin_short_price);
    }
}