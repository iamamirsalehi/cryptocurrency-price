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
* ethereumClassic
* stellar
* binancecoin
* eos
* bitcoinCache
* cardano
* tezos
* chainlink
* monero
* dogecoin

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

**the method works like this, You can just call the cryptocurrency that you want then call the _long_ or _short_ method**