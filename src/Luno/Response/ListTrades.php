<?php

namespace Luno\Response;

class ListTrades extends AbstractResponse
{
  protected $trades;

  public function getTrades(): array /* Trade */ {
    return $this->trades;
  }

  public static function make($res): ListTrades {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

