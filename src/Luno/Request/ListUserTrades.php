<?php

namespace Luno\Request;

class ListUserTrades extends AbstractRequest
{
  /**
   * Filter to trades of this currency pair.
   */
  protected $pair;

  /**
   * Limit to this number of trades (default 100).
   */
  protected $limit;

  /**
   * Filter to trades on or after this timestamp.
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
  public function getLimit(): int
  {
    if (!isset($this->limit)) {
      return 0;
    }
    return $this->limit;
  }

  /**
   * @param int $limit
   */
  public function setLimit(int $limit)
  {
    $this->limit = $limit;
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
