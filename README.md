<img src="https://www.luno.com/static/images/luno-email-336.png">

# Luno API

This PHP package provides a wrapper for the [Luno API](https://www.luno.com/api).

⚠️ WARNING This package is currently being tested, and should not be used in production.

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

$req = new Luno\GetOrderBookRequest();
$req->pair = "XBTZAR";

try {
  $res = $client->getOrderBook($req);
} catch (Luno\Error $e) {
  echo $e->message();
}
```

### License

[MIT](https://github.com/luno/luno-php/blob/master/LICENSE.md)

