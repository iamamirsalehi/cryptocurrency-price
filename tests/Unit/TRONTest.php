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

        return $tron_long_price;
    }

    public function test_if_crawler_can_get_tron_short_price()
    {
        $tron_short_price = CryptoCurrencies::tron()->short();

        $this->assertNotNull($tron_short_price);

        $this->assertIsNumeric($tron_short_price);

        return $tron_short_price;
    }


    /**
     * @depends test_if_crawler_can_get_tron_long_price
     * 
     * @depends test_if_crawler_can_get_tron_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($tron_long_price, $tron_short_price)
    {
        $both_prices = CryptoCurrencies::tron()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $tron_long_price);

        $this->assertEquals($both_prices['short'], $tron_short_price);
    }
}