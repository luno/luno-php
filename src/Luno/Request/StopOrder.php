<?php declare(strict_types=1);

namespace Luno\Request;

class StopOrder extends AbstractRequest
{
  /**
   * The Order identifier as a string.
   */
  protected $order_id;
  
  /**
   * @return string
   */
  public function getOrderId(): string
  {
    if (!isset($this->order_id)) {
      return "";
    }
    return $this->order_id;
  }

  /**
   * @param string $orderId
   */
  public function setOrderId(string $orderId)
  {
    $this->order_id = $orderId;
  }
}

// vi: ft=php
