<?php

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

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getPrice(): float {
    return $this->price;
  }

  public function setPrice(float $price) {
    $this->price = $price;
  }

  public function getType(): string /* OrderType */ {
    return $this->type;
  }

  public function setType(string /* OrderType */ $type) {
    $this->type = $type;
  }

  public function getVolume(): float {
    return $this->volume;
  }

  public function setVolume(float $volume) {
    $this->volume = $volume;
  }

  public function getBaseAccountId(): string {
    return $this->base_account_id;
  }

  public function setBaseAccountId(string $baseAccountId) {
    $this->base_account_id = $baseAccountId;
  }

  public function getCounterAccountId(): string {
    return $this->counter_account_id;
  }

  public function setCounterAccountId(string $counterAccountId) {
    $this->counter_account_id = $counterAccountId;
  }
}

// vi: ft=php
