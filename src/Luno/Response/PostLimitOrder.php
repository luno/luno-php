<?php declare(strict_types=1);

namespace Luno\Response;

class PostLimitOrder extends AbstractResponse
{
  /**
   * Unique order identifier
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
