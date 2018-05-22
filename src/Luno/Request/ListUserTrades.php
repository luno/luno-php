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

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getLimit(): integer {
    return $this->limit;
  }

  public function setLimit(integer $limit) {
    $this->limit = $limit;
  }

  public function getSince(): integer {
    return $this->since;
  }

  public function setSince(integer $since) {
    $this->since = $since;
  }
}

// vi: ft=php
