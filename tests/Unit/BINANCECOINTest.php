<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class BINANCECOINTest extends TestCase
{
    public function test_if_crawler_can_get_binanceCoin_long_price()
    {
        $binance_coin_long_price = CryptoCurrencies::binanceCoin()->long();

        $this->assertNotNull($binance_coin_long_price);

        $this->assertIsNumeric($binance_coin_long_price);

        return $binance_coin_long_price;
    }

    public function test_if_crawler_can_get_binanceCoin_short_price()
    {
        $binance_coin_short_price = CryptoCurrencies::binanceCoin()->short();

        $this->assertNotNull($binance_coin_short_price);

        $this->assertIsNumeric($binance_coin_short_price);

        return $binance_coin_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_binanceCoin_long_price
     *
     * @depends test_if_crawler_can_get_binanceCoin_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($binance_coin_long_price, $binance_coin_short_price)
    {
        $both_prices = CryptoCurrencies::binanceCoin()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $binance_coin_long_price);

        $this->assertEquals($both_prices['short'], $binance_coin_short_price);
    }
}
