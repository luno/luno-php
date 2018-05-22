<?php

namespace Luno\Response;

class PostMarketOrder extends AbstractResponse
{
  protected $order_id;

  public function getOrderId(): string {
    return $this->order_id;
  }

  public static function make($res): PostMarketOrder {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

