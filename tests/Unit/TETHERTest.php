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

        return $tether_long_price;
    }

    public function test_if_crawler_can_get_tether_short_price()
    {
        $tether_short_price = CryptoCurrencies::tether()->short();

        $this->assertNotNull($tether_short_price);
        
        $this->assertIsNumeric($tether_short_price);

        return $tether_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_tether_long_price
     *
     * @depends test_if_crawler_can_get_tether_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($tether_long_price, $tether_short_price)
    {
        $both_prices = CryptoCurrencies::tether()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $tether_long_price);

        $this->assertEquals($both_prices['short'], $tether_short_price);
    }
}
