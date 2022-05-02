<?php declare(strict_types=1);

namespace Luno\Response;

class ListTrades extends AbstractResponse
{
  protected $trades;
  
  /**
   * @return \Luno\Types\PublicTrade[]
   */
  public function getTrades(): array
  {
    if (!isset($this->trades)) {
      return [];
    }
    return $this->trades;
  }

  /**
   * @param \Luno\Types\PublicTrade[] $trades
   */
  public function setTrades(array $trades)
  {
    $this->trades = $trades;
  }
}

// vi: ft=php
