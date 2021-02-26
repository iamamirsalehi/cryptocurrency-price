<?php

namespace Iamamirsalehi\Crawler;

use Iamamirsalehi\Contracts\CrawlerInterface;
use Iamamirsalehi\Helpers\Price;

class USDT extends CrawlerInterface
{
    public static $crawler = USDT::class;

    public function long()
    {
        return Price::removeTomanTextFromPrice($this->client->filter('#RWPCS-usdt-table-buyers tr > td:nth-child(2)')->eq(0)->text());
    }

    public function short()
    {
        return Price::removeTomanTextFromPrice($this->client->filter('#RWPCS-usdt-table-sellers tr > td:nth-child(2)')->eq(0)->text());
    }

    public function getLongAndShortPrices()
    {
        return [
            'long'  => $this->long(),
            'short' => $this->short(),
        ];
    }
}