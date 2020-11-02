<?php declare(strict_types=1);

namespace Luno\Types;

class TradeDetails
{
  /**
   * Pair of the market
   */
  protected $pair;

  /**
   * Price at which the volume traded for
   */
  protected $price;

  /**
   * Sequence identifies the trade within a market
   */
  protected $sequence;

  /**
   * Volume is the amount of base traded
   */
  protected $volume;
  
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
