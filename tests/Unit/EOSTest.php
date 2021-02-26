<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class EOSTest extends TestCase
{
    public function test_if_crawler_can_get_eos_long_price()
    {
        $eos_long_price = CryptoCurrencies::eos()->long();

        $this->assertNotNull($eos_long_price);

        $this->assertIsNumeric($eos_long_price);

        return $eos_long_price;
    }

    public function test_if_crawler_can_get_eos_short_price()
    {
        $eos_short_price = CryptoCurrencies::eos()->short();

        $this->assertNotNull($eos_short_price);

        $this->assertIsNumeric($eos_short_price);

        return $eos_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_eos_long_price
     *
     * @depends test_if_crawler_can_get_eos_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($eos_long_price, $eos_short_price)
    {
        $both_prices = CryptoCurrencies::eos()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $eos_long_price);

        $this->assertEquals($both_prices['short'], $eos_short_price);
    }
}
