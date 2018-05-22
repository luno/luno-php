<?php

namespace Luno\Response;

class Send extends AbstractResponse
{
  protected $success;
  protected $withdrawal_id;

  public function getSuccess(): boolean {
    return $this->success;
  }

  public function getWithdrawalId(): string {
    return $this->withdrawal_id;
  }

  public static function make($res): Send {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

