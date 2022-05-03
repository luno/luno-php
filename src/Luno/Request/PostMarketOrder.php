<?php declare(strict_types=1);

namespace Luno\Request;

class PostMarketOrder extends AbstractRequest
{
  /**
   * The currency pair to trade.
   */
  protected $pair;

  /**
   * <code>BUY</code> to buy an asset<br>
   * <code>SELL</code> to sell an asset
   */
  protected $type;

  /**
   * The base currency account to use in the trade.
   */
  protected $base_account_id;

  /**
   * For a <code>SELL</code> order: amount of the base currency to use (e.g. how much BTC to sell for EUR in the BTC/EUR market)
   */
  protected $base_volume;

  /**
   * Client order ID.
   * May only contain alphanumeric (0-9, a-z, or A-Z) and special characters (_ ; , . -). Maximum length: 255.
   * It will be available in read endpoints, so you can use it to reconcile Luno with your internal system.
   * Values must be unique across all your successful order creation endpoint calls; trying to create an order
   * with the same `client_order_id` as one of your past orders will result in a HTTP 409 Conflict response.
   */
  protected $client_order_id;

  /**
   * The counter currency account to use in the trade.
   */
  protected $counter_account_id;

  /**
   * For a <code>BUY</code> order: amount of the counter currency to use (e.g. how much EUR to use to buy BTC in the BTC/EUR market)
   */
  protected $counter_volume;

  /**
   * Unix timestamp in milliseconds of when the request was created and sent.
   */
  protected $timestamp;

  /**
   * Specifies the number of milliseconds after timestamp the request is valid for.
   * If `timestamp` is not specified, `ttl` will not be used.
   */
  protected $ttl;
  
  /**
   * @return string
   */
  public function getPair(): string
  {
    if (!isset($this->pair)) {
      return "";
    }
    return $this->pair;
  }

  /**
   * @param string $pair
   */
  public function setPair(string $pair)
  {
    $this->pair = $pair;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

  /**
   * @return int
   */
  public function getBaseAccountId(): int
  {
    if (!isset($this->base_account_id)) {
      return 0;
    }
    return $this->base_account_id;
  }

  /**
   * @param int $baseAccountId
   */
  public function setBaseAccountId(int $baseAccountId)
  {
    $this->base_account_id = $baseAccountId;
  }

  /**
   * @return float
   */
  public function getBaseVolume(): float
  {
    if (!isset($this->base_volume)) {
      return 0;
    }
    return $this->base_volume;
  }

  /**
   * @param float $baseVolume
   */
  public function setBaseVolume(float $baseVolume)
  {
    $this->base_volume = $baseVolume;
  }

  /**
   * @return string
   */
  public function getClientOrderId(): string
  {
    if (!isset($this->client_order_id)) {
      return "";
    }
    return $this->client_order_id;
  }

  /**
   * @param string $clientOrderId
   */
  public function setClientOrderId(string $clientOrderId)
  {
    $this->client_order_id = $clientOrderId;
  }

  /**
   * @return int
   */
  public function getCounterAccountId(): int
  {
    if (!isset($this->counter_account_id)) {
      return 0;
    }
    return $this->counter_account_id;
  }

  /**
   * @param int $counterAccountId
   */
  public function setCounterAccountId(int $counterAccountId)
  {
    $this->counter_account_id = $counterAccountId;
  }

  /**
   * @return float
   */
  public function getCounterVolume(): float
  {
    if (!isset($this->counter_volume)) {
      return 0;
    }
    return $this->counter_volume;
  }

  /**
   * @param float $counterVolume
   */
  public function setCounterVolume(float $counterVolume)
  {
    $this->counter_volume = $counterVolume;
  }

  /**
   * @return int
   */
  public function getTimestamp(): int
  {
    if (!isset($this->timestamp)) {
      return 0;
    }
    return $this->timestamp;
  }

  /**
   * @param int $timestamp
   */
  public function setTimestamp(int $timestamp)
  {
    $this->timestamp = $timestamp;
  }

  /**
   * @return int
   */
  public function getTtl(): int
  {
    if (!isset($this->ttl)) {
      return 0;
    }
    return $this->ttl;
  }

  /**
   * @param int $ttl
   */
  public function setTtl(int $ttl)
  {
    $this->ttl = $ttl;
  }
}

// vi: ft=php
