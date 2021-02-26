<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class STELLARTest extends TestCase
{
    public function test_if_crawler_can_get_stellar_long_price()
    {
        $stellar_long_price = CryptoCurrencies::stellar()->long();

        $this->assertNotNull($stellar_long_price);

        $this->assertIsNumeric($stellar_long_price);

        return $stellar_long_price;
    }

    public function test_if_crawler_can_get_stellar_short_price()
    {
        $stellar_short_price = CryptoCurrencies::stellar()->short();

        $this->assertNotNull($stellar_short_price);

        $this->assertIsNumeric($stellar_short_price);

        return $stellar_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_stellar_long_price
     *
     * @depends test_if_crawler_can_get_stellar_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($stellar_long_price, $stellar_short_price)
    {
        $both_prices = CryptoCurrencies::stellar()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $stellar_long_price);

        $this->assertEquals($both_prices['short'], $stellar_short_price);
    }
}
