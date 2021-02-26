# cryptocurrency-price
You can get the best prices of cryptocurrency for long and short

## install this package

```
composer require iamamirsalehi/cryptocurrency-price
```

## Let's see how it works

If you want to get the long price of USDT you can use like this

```php
<?php

CryptoCurrencies::usdt()->long();

# codes
```
And for the short price

```php
<?php

CryptoCurrencies::usdt()->short();

# codes
```

**the method works like this, You can just call the cryptocurrency that you want then call the _long_ or _short_ method**