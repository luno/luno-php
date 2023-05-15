<?php declare(strict_types=1);

namespace Luno\Request;

class PostLimitOrder extends AbstractRequest
{
  /**
   * The currency pair to trade.
   */
  protected $pair;

  /**
   * Limit price as a decimal string in units of ZAR/BTC.
   */
  protected $price;

  /**
   * <code>BID</code> for a bid (buy) limit order<br>
   * <code>ASK</code> for an ask (sell) limit order
   */
  protected $type;

  /**
   * Amount of cryptocurrency to buy or sell as a decimal string in units of the currency.
   */
  protected $volume;

  /**
   * The base currency Account to use in the trade.
   */
  protected $base_account_id;

  /**
   * Client order ID.
   * May only contain alphanumeric (0-9, a-z, or A-Z) and special characters (_ ; , . -). Maximum length: 255.
   * It will be available in read endpoints, so you can use it to reconcile Luno with your internal system.
   * Values must be unique across all your successful order creation endpoint calls; trying to create an order
   * with the same `client_order_id` as one of your past orders will result in a HTTP 409 Conflict response.
   */
  protected $client_order_id;

  /**
   * The counter currency Account to use in the trade.
   */
  protected $counter_account_id;

  /**
   * Post-only Orders will be cancelled if they would otherwise have traded
   * immediately.
   * For example, if there's a bid at ZAR 100,000 and you place a post-only ask at ZAR 100,000,
   * your order will be cancelled instead of trading.
   * If the best bid is ZAR 100,000 and you place a post-only ask at ZAR 101,000,
   * your order won't trade but will go into the order book.
   */
  protected $post_only;

  /**
   * Side of the trigger price to activate the order. This should be set if `stop_price` is also
   * set.
   * 
   * `RELATIVE_LAST_TRADE` will automatically infer the direction based on the last
   * trade price and the stop price. If last trade price is less than stop price then stop
   * direction is ABOVE otherwise is BELOW.
   */
  protected $stop_direction;

  /**
   * Trigger trade price to activate this order as a decimal string. If this
   * is set then this is treated as a Stop Limit Order and `stop_direction`
   * is expected to be set too.
   */
  protected $stop_price;

  /**
   * <code>GTC</code> Good 'Til Cancelled. The order remains open until it is filled or cancelled by the user.</br>
   * <code>IOC</code> Immediate Or Cancel. The part of the order that cannot be filled immediately will be cancelled. Cannot be post-only.</br>
   * <code>FOK</code> Fill Or Kill. If the order cannot be filled immediately and completely it will be cancelled before any trade. Cannot be post-only.
   */
  protected $time_in_force;

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
   * @return float
   */
  public function getPrice(): float
  {
    if (!isset($this->price)) {
      return 0;
    }
    return $this->price;
  }

  /**
   * @param float $price
   */
  public function setPrice(float $price)
  {
    $this->price = $price;
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
   * @return float
   */
  public function getVolume(): float
  {
    if (!isset($this->volume)) {
      return 0;
    }
    return $this->volume;
  }

  /**
   * @param float $volume
   */
  public function setVolume(float $volume)
  {
    $this->volume = $volume;
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
   * @return bool
   */
  public function getPostOnly(): bool
  {
    if (!isset($this->post_only)) {
      return false;
    }
    return $this->post_only;
  }

  /**
   * @param bool $postOnly
   */
  public function setPostOnly(bool $postOnly)
  {
    $this->post_only = $postOnly;
  }

  /**
   * @return string
   */
  public function getStopDirection(): string
  {
    if (!isset($this->stop_direction)) {
      return "";
    }
    return $this->stop_direction;
  }

  /**
   * @param string $stopDirection
   */
  public function setStopDirection(string $stopDirection)
  {
    $this->stop_direction = $stopDirection;
  }

  /**
   * @return float
   */
  public function getStopPrice(): float
  {
    if (!isset($this->stop_price)) {
      return 0;
    }
    return $this->stop_price;
  }

  /**
   * @param float $stopPrice
   */
  public function setStopPrice(float $stopPrice)
  {
    $this->stop_price = $stopPrice;
  }

  /**
   * @return string
   */
  public function getTimeInForce(): string
  {
    if (!isset($this->time_in_force)) {
      return "";
    }
    return $this->time_in_force;
  }

  /**
   * @param string $timeInForce
   */
  public function setTimeInForce(string $timeInForce)
  {
    $this->time_in_force = $timeInForce;
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
