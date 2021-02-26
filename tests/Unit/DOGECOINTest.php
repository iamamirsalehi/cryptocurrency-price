<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class DOGECOINTest extends TestCase
{
    public function test_if_crawler_can_get_dogecoin_long_price()
    {
        $dogecoin_long_price = CryptoCurrencies::dogecoin()->long();

        $this->assertNotNull($dogecoin_long_price);

        $this->assertIsNumeric($dogecoin_long_price);

        return $dogecoin_long_price;
    }

    public function test_if_crawler_can_get_dogecoin_short_price()
    {
        $dogecoin_short_price = CryptoCurrencies::dogecoin()->short();

        $this->assertNotNull($dogecoin_short_price);

        $this->assertIsNumeric($dogecoin_short_price);

        return $dogecoin_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_dogecoin_long_price
     *
     * @depends test_if_crawler_can_get_dogecoin_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($dogecoin_long_price, $dogecoin_short_price)
    {
        $both_prices = CryptoCurrencies::dogecoin()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $dogecoin_long_price);

        $this->assertEquals($both_prices['short'], $dogecoin_short_price);
    }
}
