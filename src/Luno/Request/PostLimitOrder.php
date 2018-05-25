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
   * <code>ASK</code> for ab ask (sell) limit order
   */
  protected $type;

  /**
   * Amount of Bitcoin or Ethereum to buy or sell as a decimal string in units
   * of the currency.
   */
  protected $volume;

  /**
   * The base currency account to use in the trade.
   */
  protected $base_account_id;

  /**
   * The counter currency account to use in the trade.
   */
  protected $counter_account_id;
  
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
   * @return string
   */
  public function getBaseAccountId(): string
  {
    if (!isset($this->base_account_id)) {
      return "";
    }
    return $this->base_account_id;
  }

  /**
   * @param string $baseAccountId
   */
  public function setBaseAccountId(string $baseAccountId)
  {
    $this->base_account_id = $baseAccountId;
  }

  /**
   * @return string
   */
  public function getCounterAccountId(): string
  {
    if (!isset($this->counter_account_id)) {
      return "";
    }
    return $this->counter_account_id;
  }

  /**
   * @param string $counterAccountId
   */
  public function setCounterAccountId(string $counterAccountId)
  {
    $this->counter_account_id = $counterAccountId;
  }
}

// vi: ft=php
