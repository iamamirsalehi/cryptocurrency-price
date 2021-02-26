<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class CHAINLINKTest extends TestCase
{
    public function test_if_crawler_can_get_chainlink_long_price()
    {
        $chainlink_long_price = CryptoCurrencies::chainlink()->long();

        $this->assertNotNull($chainlink_long_price);

        $this->assertIsNumeric($chainlink_long_price);

        return $chainlink_long_price;
    }

    public function test_if_crawler_can_get_chainlink_short_price()
    {
        $chainlink_short_price = CryptoCurrencies::chainlink()->short();

        $this->assertNotNull($chainlink_short_price);

        $this->assertIsNumeric($chainlink_short_price);

        return $chainlink_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_chainlink_long_price
     *
     * @depends test_if_crawler_can_get_chainlink_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($chainlink_long_price, $chainlink_short_price)
    {
        $both_prices = CryptoCurrencies::chainlink()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $chainlink_long_price);

        $this->assertEquals($both_prices['short'], $chainlink_short_price);
    }
}
