<?php

namespace Iamamirsalehi\Contracts;

use Goutte\Client;

abstract class CrawlerInterface
{
    public static $crawler;

    protected $website = '';

    protected $client;

    public function __construct()
    {
        $this->website = 'https://arzex.io/tether/';

        $client = new Client();

        $this->client = $client->request('GET', $this->website);
    }

    abstract public function long();

    abstract public function short();

    abstract public function getLongAndShortPrices();

    public static function __callStatic($name, $arguments)
    {
        self::$crawler->{$name}();
    }
}