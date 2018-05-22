<?php

namespace Luno\Response;

class GetTickers extends AbstractResponse
{
  protected $tickers;

  public function getTickers(): array /* Ticker */ {
    return $this->tickers;
  }

  public static function make($res): GetTickers {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

