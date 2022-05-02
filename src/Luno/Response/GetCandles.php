<?php declare(strict_types=1);

namespace Luno\Response;

class GetCandles extends AbstractResponse
{
  protected $candles;

  /**
   * Duration in seconds
   */
  protected $duration;
  protected $pair;
  
  /**
   * @return \Luno\Types\Candle[]
   */
  public function getCandles(): array
  {
    if (!isset($this->candles)) {
      return [];
    }
    return $this->candles;
  }

  /**
   * @param \Luno\Types\Candle[] $candles
   */
  public function setCandles(array $candles)
  {
    $this->candles = $candles;
  }

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
}

// vi: ft=php
