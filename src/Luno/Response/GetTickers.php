<?php declare(strict_types=1);

namespace Luno\Response;

class GetTickers extends AbstractResponse
{
  protected $tickers;
  
  /**
   * @return \Luno\Types\Ticker[]
   */
  public function getTickers(): array
  {
    if (!isset($this->tickers)) {
      return [];
    }
    return $this->tickers;
  }

  /**
   * @param \Luno\Types\Ticker[] $tickers
   */
  public function setTickers(array $tickers)
  {
    $this->tickers = $tickers;
  }
}

// vi: ft=php
