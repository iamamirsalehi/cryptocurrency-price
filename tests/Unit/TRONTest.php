<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class TRONTest extends TestCase
{
    public function test_if_crawler_can_get_tron_long_price()
    {
        $tron_long_price = CryptoCurrencies::tron()->long();

        $this->assertNotNull($tron_long_price);
        $this->assertIsNumeric($tron_long_price);
    }

    public function test_if_crawler_can_get_tron_short_price()
    {
        $tron_short_price = CryptoCurrencies::tron()->short();

        $this->assertNotNull($tron_short_price);
        $this->assertIsNumeric($tron_short_price);
    }
}