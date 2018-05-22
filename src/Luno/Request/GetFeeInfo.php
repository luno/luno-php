<?php

namespace Luno\Request;

class GetFeeInfo extends AbstractRequest
{
  /**
   * Get fee information about this pair.
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
