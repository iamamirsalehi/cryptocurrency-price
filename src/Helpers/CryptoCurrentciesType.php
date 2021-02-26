<?php

namespace Iamamirsalehi\Helpers;

class CryptoCurrentciesType
{
    const BITCOIN          = 'bitcoin';
    const TETHER           = 'tether';
    const ETHEREUM         = 'ethereum';
    const RIPPLE           = 'ripple';
    const LITECOIN         = 'litecoin';
    const TRON             = 'tron';
    const ETHEREUM_CLASSIC = 'ethereumClassic';
    const STELLAR          = 'stellar';
    const BINANCECOIN      = 'binanceCoin';
    const EOS              = 'eos';
    const BITCOIN_CASH     = 'bitcoinCash';
    const CARDANO          = 'cardano';
    const TEZOS            = 'tezos';
    const CHAINLINK        = 'chainlink';
    const MONERO           = 'monero';
    const DOGECOIN         = 'dogecoin';

    public static function getCryptoCurrentciesType(string $type = null)
    {
        return [
            self::BITCOIN          => 'btc',
            self::ETHEREUM         => 'eth',
            self::TETHER           => 'usdt',
            self::RIPPLE           => 'xrp',
            self::LITECOIN         => 'ltc',
            self::TRON             => 'trx',
            self::ETHEREUM_CLASSIC => 'etc',
            self::STELLAR          => 'xlm',
            self::BINANCECOIN      => 'bnb',
            self::EOS              => 'eos',
            self::BITCOIN_CASH    => 'bch',
            self::CARDANO          => 'ada',
            self::TEZOS            => 'xtz',
            self::CHAINLINK        => 'link',
            self::MONERO           => 'xmr',
            self::DOGECOIN         => 'doge',
        ][$type];
    }

    public static function convertCoinAggregateToFullName(string $aggregate)
    {
        return [
             'btc'      => self::BITCOIN          ,
             'eth'      => self::ETHEREUM         ,
             'usdt'     => self::TETHER          ,
             'xrp'      => self::RIPPLE           ,
             'ltc'      => self::LITECOIN         ,
             'trx'      => self::TRON             ,
             'etc'      => self::ETHEREUM_CLASSIC ,
             'xlm'      => self::STELLAR          ,
             'bnb'      => self::BINANCECOIN      ,
             'eos'      => self::EOS              ,
             'bch'      => self::BITCOIN_CASH    ,
             'ada'      => self::CARDANO          ,
             'xtz'      => self::TEZOS            ,
             'link'     =>  self::CHAINLINK       ,
             'xmr'      => self::MONERO           ,
             'doge'     =>  self::DOGECOIN        ,
        ][$aggregate];
    }
}