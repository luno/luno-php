<?php declare(strict_types=1);

namespace Luno\Request;

class GetOrderBookFull extends AbstractRequest
{
  /**
   * Currency pair of the Orders to retrieve
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
