<?php

namespace Luno\Response;

class PostLimitOrder extends AbstractResponse
{
  protected $order_id;

  public function getOrderId(): string {
    return $this->order_id;
  }

  public static function make($res): PostLimitOrder {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

