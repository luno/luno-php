<?php

namespace Luno\Request;

class CreateQuote extends AbstractRequest
{
  /**
   * Amount to buy or sell in the pair base currency.
   */
  protected $base_amount;

  /**
   * Currency pair to trade. The pair can also be flipped if you want to buy
   * or sell the counter currency (e.g. ZARXBT).
   */
  protected $pair;

  /**
   * <code>BUY</code> or <code>SELL</code>.
   */
  protected $type;

  /**
   * Optional account for the pair's base currency.
   */
  protected $base_account_id;

  /**
   * Optional account for the pair's counter currency.
   */
  protected $counter_account_id;

  public function getBaseAmount(): float {
    return $this->base_amount;
  }

  public function setBaseAmount(float $baseAmount) {
    $this->base_amount = $baseAmount;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getType(): string {
    return $this->type;
  }

  public function setType(string $type) {
    $this->type = $type;
  }

  public function getBaseAccountId(): integer {
    return $this->base_account_id;
  }

  public function setBaseAccountId(integer $baseAccountId) {
    $this->base_account_id = $baseAccountId;
  }

  public function getCounterAccountId(): integer {
    return $this->counter_account_id;
  }

  public function setCounterAccountId(integer $counterAccountId) {
    $this->counter_account_id = $counterAccountId;
  }
}

// vi: ft=php
