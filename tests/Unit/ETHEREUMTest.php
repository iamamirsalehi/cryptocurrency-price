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

        return $ethereum_long_price;
    }

    public function test_if_crawler_can_get_ethereum_short_price()
    {
        $ethereum_short_price = CryptoCurrencies::ethereum()->short();

        $this->assertNotNull($ethereum_short_price);

        $this->assertIsNumeric($ethereum_short_price);

        return $ethereum_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_ethereum_long_price
     *
     * @depends test_if_crawler_can_get_ethereum_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($ethereum_long_price, $ethereum_short_price)
    {
        $both_prices = CryptoCurrencies::ethereum()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $ethereum_long_price);

        $this->assertEquals($both_prices['short'], $ethereum_short_price);
    }
}
