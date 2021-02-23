<?php declare(strict_types=1);

namespace Luno\Response;

class GetTicker extends AbstractResponse
{
  /**
   * The lowest ask price
   */
  protected $ask;

  /**
   * The highest bid price
   */
  protected $bid;

  /**
   * Last trade price
   */
  protected $last_trade;
  protected $pair;

  /**
   * 24h rolling trade volume
   */
  protected $rolling_24_hour_volume;

  /**
   * Market current status
   * 
   * <code>ACTIVE</code> when the market is trading normally
   * 
   * <code>POSTONLY</code> when the market has been suspended and only post-only orders will be accepted
   * 
   * <code>DISABLED</code> when the market is shutdown and no orders can be accepted
   */
  protected $status;

  /**
   * Unix timestamp in milliseconds of the tick
   */
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
