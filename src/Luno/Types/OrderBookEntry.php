<?php declare(strict_types=1);

namespace Luno\Types;

class OrderBookEntry
{
  /**
   * Limit price at which orders are trading at
   */
  protected $price;

  /**
   * The volume available at the limit price
   */
  protected $volume;
  
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
