<?php

namespace Luno;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;

/**
 * AbstractClient is a Luno API wrapper. It doesn't have any API functions
 * implemented, though - those are added in Client.
 */
abstract class AbstractClient
{
  private static $defaultBaseURL = 'https://api.mybitx.com/';
  private static $defaultTimeoutSeconds = 10.0;

  protected $baseURL;
  protected $timeoutSeconds;
  protected $apiKeyID;
  protected $apiKeySecret;
  protected $client;

  public function __construct()
  {
    $this->setBaseURL(self::$defaultBaseURL);
    $this->setTimeout(self::$defaultTimeoutSeconds);
    $this->setClient(new HttpClient());
  }

  /**
   * setAuth provides the client with an API key and secret.
   */
  public function setAuth(string $apiKeyID, string $apiKeySecret)
  {
    if ($apiKeyID == '' || $apiKeySecret == '') {
      throw new \InvalidArgumentException('apiKeyID and apiKeySecret are both required');
    }
    $this->apiKeyID = $apiKeyID;
    $this->apiKeySecret = $apiKeySecret;
  }

  /**
   * setBaseURL overrides the default base URL. For internal use.
   */
  public function setBaseURL(string $baseURL)
  {
    $flags = \FILTER_FLAG_SCHEME_REQUIRED | \FILTER_FLAG_HOST_REQUIRED; 
    $valid = filter_var($baseURL, \FILTER_VALIDATE_URL, $flags);
    if (!$valid) {
      throw new \InvalidArgumentException('baseURL should be a valid URL');
    }
    $this->baseURL = rtrim($baseURL, '/');
  }

  /**
   * setTimeout sets the timeout for requests made by this client.
   */
  public function setTimeout(float $timeoutSeconds)
  {
    if ($timeoutSeconds <= 0.0) {
      throw new \InvalidArgumentException('timeoutSeconds should be positive');
    }
    $this->timeoutSeconds = $timeoutSeconds;
  }

  /**
   * setClient sets the HTTP client to use when making requests.
   */
  public function setClient(HttpClient $client)
  {
    if ($client === null) {
      throw new \InvalidArgumentException('client cannot be null');
    }
    $this->client = $client;
  }

  protected function do(string $method, string $path, $req, bool $auth)
  {
    if ($req !== null) {
      $req = json_decode(json_encode($req));
      foreach ($req as $k => $v) {
        $path = str_replace('{' . $k . '}', $v, $path);
      }
    }

    $url = $this->baseURL . '/' . ltrim($path, '/');

    $options = [
      'timeout' => $this->timeoutSeconds,
    ];
    if ($method == 'GET') {
      $options['query'] = $req;
    } else {
      $options['form_params'] = $req;
    }
    if ($auth) {
      $options['auth'] = [$this->apiKeyID, $this->apiKeySecret];
    }

    try {
      $res = $this->client->request($method, $url, $options);
    } catch (ClientException $e) {
      $json = json_decode($e->getResponse()->getBody());
      if (isset($json->error_code)) {
        throw new Error($json->error_code, $json->error);
      }
      throw $e;
    }

    return json_decode($res->getBody());
  }
}
