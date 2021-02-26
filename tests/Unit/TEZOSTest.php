<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class TEZOSTest extends TestCase
{
    public function test_if_crawler_can_get_tezos_long_price()
    {
        $tezos_long_price = CryptoCurrencies::tezos()->long();

        $this->assertNotNull($tezos_long_price);

        $this->assertIsNumeric($tezos_long_price);

        return $tezos_long_price;
    }

    public function test_if_crawler_can_get_tezos_short_price()
    {
        $tezos_short_price = CryptoCurrencies::tezos()->short();

        $this->assertNotNull($tezos_short_price);

        $this->assertIsNumeric($tezos_short_price);

        return $tezos_short_price;
    }

    /**
    * @depends test_if_crawler_can_get_tezos_long_price
    *
    * @depends test_if_crawler_can_get_tezos_short_price
    */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($tezos_long_price, $tezos_short_price)
    {
        $both_prices = CryptoCurrencies::tezos()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $tezos_long_price);

        $this->assertEquals($both_prices['short'], $tezos_short_price);
    }
}
