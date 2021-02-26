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

        return $litecoin_long_price;
    }

    public function test_if_crawler_can_get_litecoin_short_price()
    {
        $litecoin_short_price = CryptoCurrencies::litecoin()->short();

        $this->assertNotNull($litecoin_short_price);

        $this->assertIsNumeric($litecoin_short_price);

        return $litecoin_short_price;
    }

      /**
     * @depends test_if_crawler_can_get_litecoin_long_price
     * 
     * @depends test_if_crawler_can_get_litecoin_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($litecoin_long_price, $litecoin_short_price)
    {
        $both_prices = CryptoCurrencies::litecoin()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $litecoin_long_price);

        $this->assertEquals($both_prices['short'], $litecoin_short_price);
    }
}