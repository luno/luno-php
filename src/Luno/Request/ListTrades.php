<?php

namespace Luno\Request;

class ListTrades extends AbstractRequest
{
  /**
   * Currency pair
   */
  protected $pair;

  /**
   * Fetch trades executed after this time, specified as a Unix timestamp in
   * milliseconds.
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
