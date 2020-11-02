<?php declare(strict_types=1);

namespace Luno\Response;

class ListOrdersV2 extends AbstractResponse
{
  protected $orders;
  
  /**
   * @return \Luno\Types\OrderV2[]
   */
  public function getOrders(): array
  {
    if (!isset($this->orders)) {
      return [];
    }
    return $this->orders;
  }

  /**
   * @param \Luno\Types\OrderV2[] $orders
   */
  public function setOrders(array $orders)
  {
    $this->orders = $orders;
  }
}

// vi: ft=php
