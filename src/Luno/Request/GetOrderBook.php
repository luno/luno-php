<?php

namespace Luno\Request;

class GetOrderBook extends AbstractRequest
{
  /**
   * Currency pair
   */
  protected $pair;

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }
}

// vi: ft=php
