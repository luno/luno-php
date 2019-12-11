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
   * For a <code>BUY</code> order: amount of the counter currency to use (e.g. how much EUR to use to buy BTC in the BTC/EUR market)
   */
  protected $counter_volume;

  /**
   * For a <code>SELL</code> order: amount of the base currency to use (e.g. how much BTC to sell for EUR in the BTC/EUR market)
   */
  protected $base_volume;

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
}

// vi: ft=php
