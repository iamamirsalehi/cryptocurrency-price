<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class ETHEREUMCLASSICTest extends TestCase
{
    public function test_if_crawler_can_get_ethereumClassic_long_price()
    {
        $ethereum_classic_long_price = CryptoCurrencies::ethereumClassic()->long();

        $this->assertNotNull($ethereum_classic_long_price);

        $this->assertIsNumeric($ethereum_classic_long_price);

        return $ethereum_classic_long_price;
    }

    public function test_if_crawler_can_get_ethereumClassic_short_price()
    {
        $ethereum_classic_short_price = CryptoCurrencies::ethereumClassic()->short();

        $this->assertNotNull($ethereum_classic_short_price);

        $this->assertIsNumeric($ethereum_classic_short_price);

        return $ethereum_classic_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_ethereumClassic_long_price
     *
     * @depends test_if_crawler_can_get_ethereumClassic_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($ethereum_classic_long_price, $ethereum_classic_short_price)
    {
        $both_prices = CryptoCurrencies::ethereumClassic()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $ethereum_classic_long_price);

        $this->assertEquals($both_prices['short'], $ethereum_classic_short_price);
    }
}
