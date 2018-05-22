<?php

namespace Luno\Response;

class ListOrders extends AbstractResponse
{
  protected $orders;

  public function getOrders(): array /* Order */ {
    return $this->orders;
  }

  public static function make($res): ListOrders {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

