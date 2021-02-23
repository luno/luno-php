<?php declare(strict_types=1);

namespace Luno\Response;

class GetOrderBookTop extends AbstractResponse
{
  protected $asks;
  protected $bids;
  protected $timestamp;
  
  /**
   * @return \Luno\Types\OrderBookEntry[]
   */
  public function getAsks(): array
  {
    if (!isset($this->asks)) {
      return [];
    }
    return $this->asks;
  }

  /**
   * @param \Luno\Types\OrderBookEntry[] $asks
   */
  public function setAsks(array $asks)
  {
    $this->asks = $asks;
  }

  /**
   * @return \Luno\Types\OrderBookEntry[]
   */
  public function getBids(): array
  {
    if (!isset($this->bids)) {
      return [];
    }
    return $this->bids;
  }

  /**
   * @param \Luno\Types\OrderBookEntry[] $bids
   */
  public function setBids(array $bids)
  {
    $this->bids = $bids;
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
