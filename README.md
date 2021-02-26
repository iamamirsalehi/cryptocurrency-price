# cryptocurrency-price
You can get the best prices of cryptocurrency for long and short

## install this package

```
composer require iamamirsalehi/cryptocurrency-price
```

## List of supported cryptocurrencies

* bitcoin
* tether
* ethereum
* ripple
* litecoin
* tron
* ethereum classic
* stellar
* binancecoin
* eos
* bitcoin cache
* cardano
* tezos
* chainlink
* monero
* dogecoin

## Where this pacakge gets the best prices from?

This package get the best prices from [arzex](https://arzex.io/) and in the next versions I'll customize it for you

## Let's see how it works

If you want to get the long price of bitcoin you can use like this

```php
<?php

$long_price = CryptoCurrencies::bitcoin()->long();

# codes
```
And for the short price

```php
<?php

$short_price = CryptoCurrencies::bitcoin()->short();

# codes
```
or you can have both with just one call

```php
<?php

$prices = CryptoCurrencies::bitcoin()->getLongAndShortPrices();

```

**the method works like this, You can just call the cryptocurrency that you want then call the _long_ or _short_ method**