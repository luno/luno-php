<img src="https://d32exi8v9av3ux.cloudfront.net/static/images/luno-email-336.png">

# Luno API [![Build Status](https://travis-ci.org/luno/luno-php.svg?branch=master)](https://travis-ci.org/luno/luno-php)

This PHP package provides a wrapper for the [Luno API](https://www.luno.com/api).

### Installation

```
composer require "luno/luno-php"
```

### Authentication

Please visit the [Settings](https://www.luno.com/wallet/settings/api_keys) page
to generate an API key.

### Example usage

```php
$client = new Luno\Client();
$client->setAuth("api_key_id", "api_key_secret");

$req = new Luno\Request\GetOrderBook();
$req->setPair("XBTZAR");

try {
  $res = $client->getOrderBook($req);
  echo "Found " . count($res->getBids()) . " bid(s)";
} catch (Luno\Error $e) {
  echo $e->message();
}
```

### License

[MIT](https://github.com/luno/luno-php/blob/master/LICENSE.md)

