<?php

namespace Iamamirsalehi\Contracts;

use Goutte\Client;
use Iamamirsalehi\Helpers\CryptoCurrentciesType;

abstract class CrawlerInterface
{
    public static $crawler;

    public $coin;

    protected $client;

    public function __construct($coin)
    {
        $this->coin = $coin;

        $website = 'https://arzex.io/' . CryptoCurrentciesType::convertCoinAggregateToFullName($coin) . '/';

        $client = new Client();

        $this->client = $client->request('GET', $website);
    }

    abstract public function long();

    abstract public function short();

    abstract public function getLongAndShortPrices();

    public static function __callStatic($name, $arguments)
    {
        self::$crawler->{$name}();
    }
}