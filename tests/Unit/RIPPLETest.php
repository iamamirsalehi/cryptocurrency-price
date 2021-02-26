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

        return $ripple_long_price;
    }

    public function test_if_crawler_can_get_ripple_short_price()
    {
        $ripple_short_price = CryptoCurrencies::ripple()->short();

        $this->assertNotNull($ripple_short_price);

        $this->assertIsNumeric($ripple_short_price);

        return $ripple_short_price;
    }

     /**
     * @depends test_if_crawler_can_get_ripple_long_price
     * 
     * @depends test_if_crawler_can_get_ripple_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($ripple_long_price, $ripple_short_price)
    {
        $both_prices = CryptoCurrencies::ripple()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $ripple_long_price);

        $this->assertEquals($both_prices['short'], $ripple_short_price);
    }
}