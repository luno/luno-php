<?php

namespace Luno\Response;

class StopOrder extends AbstractResponse
{
  protected $success;

  public function getSuccess(): boolean {
    return $this->success;
  }

  public static function make($res): StopOrder {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

