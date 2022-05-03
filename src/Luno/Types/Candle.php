<?php declare(strict_types=1);

namespace Luno\Types;

class Candle
{
  /**
   * Closing price
   */
  protected $close;

  /**
   * High price
   */
  protected $high;

  /**
   * Low price
   */
  protected $low;

  /**
   * Opening price
   */
  protected $open;

  /**
   * Unix timestamp in milliseconds
   */
  protected $timestamp;

  /**
   * Volume traded
   */
  protected $volume;
  
  /**
   * @return float
   */
  public function getClose(): float
  {
    if (!isset($this->close)) {
      return 0;
    }
    return $this->close;
  }

  /**
   * @param float $close
   */
  public function setClose(float $close)
  {
    $this->close = $close;
  }

  /**
   * @return float
   */
  public function getHigh(): float
  {
    if (!isset($this->high)) {
      return 0;
    }
    return $this->high;
  }

  /**
   * @param float $high
   */
  public function setHigh(float $high)
  {
    $this->high = $high;
  }

  /**
   * @return float
   */
  public function getLow(): float
  {
    if (!isset($this->low)) {
      return 0;
    }
    return $this->low;
  }

  /**
   * @param float $low
   */
  public function setLow(float $low)
  {
    $this->low = $low;
  }

  /**
   * @return float
   */
  public function getOpen(): float
  {
    if (!isset($this->open)) {
      return 0;
    }
    return $this->open;
  }

  /**
   * @param float $open
   */
  public function setOpen(float $open)
  {
    $this->open = $open;
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
