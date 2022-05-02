<?php declare(strict_types=1);

namespace Luno\Request;

class GetCandles extends AbstractRequest
{
  /**
   * Candle duration in seconds.
   * For example, 300 corresponds to 5m candles. Currently supported
   * durations are: 60 (1m), 300 (5m), 900 (15m), 1800 (30m), 3600 (1h),
   * 10800 (3h), 14400 (4h), 28800 (8h), 86400 (24h), 259200 (3d), 604800
   * (7d).
   */
  protected $duration;

  /**
   * Currency pair
   */
  protected $pair;

  /**
   * Filter to candles starting on or after this timestamp (Unix milliseconds).
   * Only up to 1000 of the earliest candles are returned.
   */
  protected $since;
  
  /**
   * @return int
   */
  public function getDuration(): int
  {
    if (!isset($this->duration)) {
      return 0;
    }
    return $this->duration;
  }

  /**
   * @param int $duration
   */
  public function setDuration(int $duration)
  {
    $this->duration = $duration;
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
   * @return int
   */
  public function getSince(): int
  {
    if (!isset($this->since)) {
      return 0;
    }
    return $this->since;
  }

  /**
   * @param int $since
   */
  public function setSince(int $since)
  {
    $this->since = $since;
  }
}

// vi: ft=php
