<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class BITCOINTest extends TestCase
{
    public function test_if_crawler_can_get_bitcoin_long_price()
    {
        $bitcoin_long_price = CryptoCurrencies::bitcoin()->long();

        $this->assertNotNull($bitcoin_long_price);

        $this->assertIsNumeric($bitcoin_long_price);

        return $bitcoin_long_price;
    }

    public function test_if_crawler_can_get_bitcoin_short_price()
    {
        $bitcoin_short_price = CryptoCurrencies::bitcoin()->short();

        $this->assertNotNull($bitcoin_short_price);

        $this->assertIsNumeric($bitcoin_short_price);

        return $bitcoin_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_bitcoin_long_price
     *
     * @depends test_if_crawler_can_get_bitcoin_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($bitcoin_long_price, $bitcoin_short_price)
    {
        $both_prices = CryptoCurrencies::bitcoin()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $bitcoin_long_price);

        $this->assertEquals($both_prices['short'], $bitcoin_short_price);
    }
}
