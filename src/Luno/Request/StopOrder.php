<?php

namespace Luno\Request;

class StopOrder extends AbstractRequest
{
  /**
   * The order reference as a string.
   */
  protected $order_id;

  public function getOrderId(): string {
    return $this->order_id;
  }

  public function setOrderId(string $orderId) {
    $this->order_id = $orderId;
  }
}

// vi: ft=php
