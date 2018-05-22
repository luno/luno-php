<?php

namespace Luno\Response;

class GetWithdrawals extends AbstractResponse
{
  protected $withdrawals;

  public function getWithdrawals(): array /* Withdrawal */ {
    return $this->withdrawals;
  }

  public static function make($res): GetWithdrawals {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

