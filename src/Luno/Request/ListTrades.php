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

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getSince(): integer {
    return $this->since;
  }

  public function setSince(integer $since) {
    $this->since = $since;
  }
}

// vi: ft=php
