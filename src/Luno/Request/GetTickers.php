<?php declare(strict_types=1);

namespace Luno\Request;

class GetTickers extends AbstractRequest
{
  /**
   * Return tickers for multiple markets (if not provided, all tickers will be returned).
   * To request tickers for multiple markets, pass the parameter multiple times,
   * e.g. `pair=XBTZAR&pair=ETHZAR`.
   */
  protected $pair;
  
  /**
   * @return \Luno\Types\string[]
   */
  public function getPair(): array
  {
    if (!isset($this->pair)) {
      return [];
    }
    return $this->pair;
  }

  /**
   * @param \Luno\Types\string[] $pair
   */
  public function setPair(array $pair)
  {
    $this->pair = $pair;
  }
}

// vi: ft=php
