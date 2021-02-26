<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class MONEROTest extends TestCase
{
    public function test_if_crawler_can_get_monero_long_price()
    {
        $monero_long_price = CryptoCurrencies::monero()->long();

        $this->assertNotNull($monero_long_price);

        $this->assertIsNumeric($monero_long_price);

        return $monero_long_price;
    }

    public function test_if_crawler_can_get_monero_short_price()
    {
        $monero_short_price = CryptoCurrencies::monero()->short();

        $this->assertNotNull($monero_short_price);

        $this->assertIsNumeric($monero_short_price);

        return $monero_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_monero_long_price
     *
     * @depends test_if_crawler_can_get_monero_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($monero_long_price, $monero_short_price)
    {
        $both_prices = CryptoCurrencies::monero()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $monero_long_price);

        $this->assertEquals($both_prices['short'], $monero_short_price);
    }
}
