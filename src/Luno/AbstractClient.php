<?php declare(strict_types=1);

namespace Luno;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;

/**
 * AbstractClient is a Luno API wrapper. It doesn't have any API functions
 * implemented, though - those are added in Client.
 */
abstract class AbstractClient
{
  private static $version = "0.0.11";
  private static $defaultBaseURL = 'https://api.luno.com/';
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
    $valid = filter_var($baseURL, \FILTER_VALIDATE_URL);
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

  protected function do(string $method, string $path,
    Request\AbstractRequest $req, bool $auth)
  {
    $reqMap = null;
    if ($req !== null) {
      $reqMap = $req->serialize();
      foreach ($reqMap as $k => $v) {
        if (strstr($path, '{' . $k . '}')) {
          $path = str_replace('{' . $k . '}', $v, $path);
          unset($reqMap[$k]);
        }
      }
    }

    $url = $this->baseURL . '/' . ltrim($path, '/');

    $options = [
      'timeout' => $this->timeoutSeconds,
      'headers' => [
        'User-Agent' => $this->makeUserAgent()
      ]
    ];
    if ($method == 'GET') {
      $options['query'] = $reqMap;
    } else {
      $options['form_params'] = $reqMap;
    }
    if ($auth) {
      $options['auth'] = [$this->apiKeyID, $this->apiKeySecret];
    }

    try {
      $res = $this->client->request($method, $url, $options);
      $json = json_decode($res->getBody()->getContents());
      $this->maybeThrowError($json);
    } catch (ClientException $e) {
      $json = json_decode($e->getResponse()->getBody()->getContents());
      $this->maybeThrowError($json);
      throw $e;
    }

    return $json;
  }

  private function maybeThrowError($json)
  {
    if ($json === null) {
      return;
    }
    if (isset($json->error_code)) {
      throw new Error($json->error_code, $json->error);
    }
  }

  private function makeUserAgent(): string
  {
    return "LunoPhpSDK/" . self::$version . " php" . phpversion() . " " .
      php_uname("s") . " " . php_uname("m");
  }
}

