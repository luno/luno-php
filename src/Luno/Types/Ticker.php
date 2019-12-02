<?php declare(strict_types=1);

namespace Luno\Types;

class Ticker
{
  protected $ask;
  protected $bid;
  protected $last_trade;
  protected $pair;
  protected $rolling_24_hour_volume;

  /**
   * <code>ACTIVE</code> when the market is trading normally
   * 
   * <code>POSTONLY</code> when the market has been suspended and only post-only orders will be accepted
   * 
   * <code>DISABLED</code> when the market is shutdown and no orders can be accepted
   */
  protected $status;
  protected $timestamp;
  
  /**
   * @return float
   */
  public function getAsk(): float
  {
    if (!isset($this->ask)) {
      return 0;
    }
    return $this->ask;
  }

  /**
   * @param float $ask
   */
  public function setAsk(float $ask)
  {
    $this->ask = $ask;
  }

  /**
   * @return float
   */
  public function getBid(): float
  {
    if (!isset($this->bid)) {
      return 0;
    }
    return $this->bid;
  }

  /**
   * @param float $bid
   */
  public function setBid(float $bid)
  {
    $this->bid = $bid;
  }

  /**
   * @return float
   */
  public function getLastTrade(): float
  {
    if (!isset($this->last_trade)) {
      return 0;
    }
    return $this->last_trade;
  }

  /**
   * @param float $lastTrade
   */
  public function setLastTrade(float $lastTrade)
  {
    $this->last_trade = $lastTrade;
  }

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
  public function getRolling24HourVolume(): float
  {
    if (!isset($this->rolling_24_hour_volume)) {
      return 0;
    }
    return $this->rolling_24_hour_volume;
  }

  /**
   * @param float $rolling24HourVolume
   */
  public function setRolling24HourVolume(float $rolling24HourVolume)
  {
    $this->rolling_24_hour_volume = $rolling24HourVolume;
  }

  /**
   * @return string
   */
  public function getStatus(): string
  {
    if (!isset($this->status)) {
      return "";
    }
    return $this->status;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status)
  {
    $this->status = $status;
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

}

// vi: ft=php
