<?php

namespace Luno\Response;

class GetBalances extends AbstractResponse
{
  protected $balance;

  public function getBalance(): array /* AccountBalance */ {
    return $this->balance;
  }

  public static function make($res): GetBalances {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

