<?php declare(strict_types=1);

namespace Luno\Types;

class PublicTrade
{
  /**
   * Whether the taker was buying or not.
   */
  protected $is_buy;

  /**
   * Price at which the asset traded at
   */
  protected $price;

  /**
   * The ever incrementing trade identifier within a market
   */
  protected $sequence;

  /**
   * Unix timestamp in milliseconds
   */
  protected $timestamp;

  /**
   * Amount of assets traded
   */
  protected $volume;
  
  /**
   * @return bool
   */
  public function getIsBuy(): bool
  {
    if (!isset($this->is_buy)) {
      return false;
    }
    return $this->is_buy;
  }

  /**
   * @param bool $isBuy
   */
  public function setIsBuy(bool $isBuy)
  {
    $this->is_buy = $isBuy;
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
   * @return int
   */
  public function getSequence(): int
  {
    if (!isset($this->sequence)) {
      return 0;
    }
    return $this->sequence;
  }

  /**
   * @param int $sequence
   */
  public function setSequence(int $sequence)
  {
    $this->sequence = $sequence;
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

}

// vi: ft=php
