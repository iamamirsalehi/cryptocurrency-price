<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\CryptoCurrencies;

class CARDANOTest extends TestCase
{
    public function test_if_crawler_can_get_cardano_long_price()
    {
        $cardano_long_price = CryptoCurrencies::cardano()->long();

        $this->assertNotNull($cardano_long_price);

        $this->assertIsNumeric($cardano_long_price);

        return $cardano_long_price;
    }

    public function test_if_crawler_can_get_cardano_short_price()
    {
        $cardano_short_price = CryptoCurrencies::cardano()->short();

        $this->assertNotNull($cardano_short_price);

        $this->assertIsNumeric($cardano_short_price);

        return $cardano_short_price;
    }

    /**
     * @depends test_if_crawler_can_get_cardano_long_price
     *
     * @depends test_if_crawler_can_get_cardano_short_price
     */
    public function test_ensure_getLongAndShortPrices_method_get_the_both_prices($cardano_long_price, $cardano_short_price)
    {
        $both_prices = CryptoCurrencies::cardano()->getLongAndShortPrices();

        $this->assertNotNull($both_prices);
        
        $this->assertNotEmpty($both_prices);
        
        $this->assertIsArray($both_prices);
        
        $this->assertEquals($both_prices['long'], $cardano_long_price);

        $this->assertEquals($both_prices['short'], $cardano_short_price);
    }
}
