<?php

namespace Luno\Request;

class PostMarketOrder extends AbstractRequest
{
  /**
   * The currency pair to trade.
   */
  protected $pair;

  /**
   * <code>BUY</code> to buy Bitcoin or Ethereum<br>
   * <code>SELL</code> to sell Bitcoin or Ethereum
   */
  protected $type;

  /**
   * The base currency account to use in the trade.
   */
  protected $base_account_id;

  /**
   * For a <code>SELL</code> order: amount of Bitcoin to sell as a decimal
   * string in units of BTC or ETH.
   */
  protected $base_volume;

  /**
   * The counter currency account to use in the trade.
   */
  protected $counter_account_id;

  /**
   * For a <code>BUY</code> order: amount of local currency (e.g. ZAR, MYR) to
   * spend as a decimal string in units of the local currency.
   */
  protected $counter_volume;

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getType(): string /* OrderType */ {
    return $this->type;
  }

  public function setType(string /* OrderType */ $type) {
    $this->type = $type;
  }

  public function getBaseAccountId(): string {
    return $this->base_account_id;
  }

  public function setBaseAccountId(string $baseAccountId) {
    $this->base_account_id = $baseAccountId;
  }

  public function getBaseVolume(): float {
    return $this->base_volume;
  }

  public function setBaseVolume(float $baseVolume) {
    $this->base_volume = $baseVolume;
  }

  public function getCounterAccountId(): string {
    return $this->counter_account_id;
  }

  public function setCounterAccountId(string $counterAccountId) {
    $this->counter_account_id = $counterAccountId;
  }

  public function getCounterVolume(): float {
    return $this->counter_volume;
  }

  public function setCounterVolume(float $counterVolume) {
    $this->counter_volume = $counterVolume;
  }
}

// vi: ft=php
