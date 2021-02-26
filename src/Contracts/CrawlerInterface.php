<?php

namespace Iamamirsalehi\Contracts;

use Goutte\Client;
use Iamamirsalehi\Helpers\StringFormater;
use Iamamirsalehi\Helpers\CryptoCurrentciesType;

abstract class CrawlerInterface
{
    public static $crawler;

    public $coin;

    protected $client;

    public function __construct($coin)
    {
        $this->coin = $coin;

        $website = '';

        $converted_coin = StringFormater::findUppercaseCharacterAndMakeItLowerAdPutADashBehandIt($coin);

        if(is_string($converted_coin))
            $website = 'https://arzex.io/' . $converted_coin . '/';
        else
            $website = 'https://arzex.io/' . CryptoCurrentciesType::convertCoinAggregateToFullName($coin) . '/';

        $client = new Client();

        $this->client = $client->request('GET', $website);
    }

    abstract public function long();

    abstract public function short();

    public function getLongAndShortPrices()
    {
        return [
            'long'  => $this->long(),
            'short' => $this->short(),
        ];
    }

    public static function __callStatic($name, $arguments)
    {
        self::$crawler->{$name}();
    }
}