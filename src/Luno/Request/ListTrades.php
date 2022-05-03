<?php declare(strict_types=1);

namespace Luno\Request;

class ListTrades extends AbstractRequest
{
  /**
   * Currency pair of the market to list the trades from
   */
  protected $pair;

  /**
   * Fetch trades executed after this time, specified as a Unix timestamp in
   * milliseconds. An error will be returned if this is before 24h ago. Use
   * this parameter to either restrict to a shorter window or to iterate over
   * the trades in case you need more than the 100 most recent trades.
   */
  protected $since;
  
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
