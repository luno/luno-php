<?php declare(strict_types=1);

namespace Luno\Response;

class Markets extends AbstractResponse
{
  protected $markets;
  
  /**
   * @return \Luno\Types\MarketInfo[]
   */
  public function getMarkets(): array
  {
    if (!isset($this->markets)) {
      return [];
    }
    return $this->markets;
  }

  /**
   * @param \Luno\Types\MarketInfo[] $markets
   */
  public function setMarkets(array $markets)
  {
    $this->markets = $markets;
  }
}

// vi: ft=php
