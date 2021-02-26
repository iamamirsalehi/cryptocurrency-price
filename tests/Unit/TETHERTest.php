<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class TETHERTest extends TestCase
{
    public function test_if_crawler_can_get_tether_long_price()
    {
        $tether_long_price = CryptoCurrencies::tether()->long();

        $this->assertNotNull($tether_long_price);
        $this->assertIsNumeric($tether_long_price);
    }

    public function test_if_crawler_can_get_tether_short_price()
    {
        $tether_short_price = CryptoCurrencies::tether()->short();

        $this->assertNotNull($tether_short_price);
        $this->assertIsNumeric($tether_short_price);
    }
}