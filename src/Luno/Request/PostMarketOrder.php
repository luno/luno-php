<?php declare(strict_types=1);

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
}

// vi: ft=php
