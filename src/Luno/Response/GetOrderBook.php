<?php

namespace Luno\Response;

class GetOrderBook extends AbstractResponse
{
  protected $asks;
  protected $bids;
  protected $timestamp;

  public function getAsks(): array /* OrderBookEntry */ {
    return $this->asks;
  }

  public function getBids(): array /* OrderBookEntry */ {
    return $this->bids;
  }

  public function getTimestamp(): integer {
    return $this->timestamp;
  }

  public static function make($res): GetOrderBook {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

