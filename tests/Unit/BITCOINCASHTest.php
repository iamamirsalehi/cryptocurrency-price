<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class BITCOINCASHTest extends TestCase
{
    public function test_if_crawler_can_get_bitcoinCash_long_price()
    {
        $bitcoin_cash_long_price = CryptoCurrencies::bitcoinCash()->long();

        $this->assertNotNull($bitcoin_cash_long_price);

        $this->assertIsNumeric($bitcoin_cash_long_price);

        return $bitcoin_cash_long_price;
    }

    public function test_if_crawler_can_get_bitCoincash_short_price()
    {
        $bitcoin_cash_short_price = CryptoCurrencies::bitcoinCash()->short();

        $this->assertNotNull($bitcoin_cash_short_price);

        $this->assertIsNumeric($bitcoin_cash_short_price);

        return $bitcoin_cash_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_bitcoinCash_long_price
     *
     * @depends test_if_crawler_can_get_bitCoinCash_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($bitcoin_cash_long_price, $bitcoin_cash_short_price)
    {
        $both_prices = CryptoCurrencies::bitcoinCash()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $bitcoin_cash_long_price);

        $this->assertEquals($both_prices['short'], $bitcoin_cash_short_price);
    }
}
