<?php

namespace Luno\Response;

class ListUserTrades extends AbstractResponse
{
  protected $trades;

  public function getTrades(): array /* Trade */ {
    return $this->trades;
  }

  public static function make($res): ListUserTrades {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

