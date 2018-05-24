<?php declare(strict_types=1);

namespace Luno\Request;

class GetFeeInfo extends AbstractRequest
{
  /**
   * Get fee information about this pair.
   */
  protected $pair;
  
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
