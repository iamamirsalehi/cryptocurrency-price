<?php

use PHPUnit\Framework\TestCase;
use Iamamirsalehi\Helpers\Price;

class PriceTest extends TestCase
{
    public function test_ensure_removetomantextfromprice_returns_price_without_any_text()
    {
        $price_without_text = Price::removeTomanTextFromPrice('25000 تومان'); 

        $this->assertNotNull($price_without_text);
        $this->assertIsNumeric($price_without_text);
    } 

    public function test_ensure_removetomantextfromprice_returns_price_without_any_text_when_it_does_not_have_argumants()
    {
        $price_without_text = Price::removeTomanTextFromPrice('25000'); 

        $this->assertNotNull($price_without_text);
        $this->assertIsNumeric($price_without_text);
    } 
}