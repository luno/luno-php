<?php declare(strict_types=1);

namespace Luno\Request;

class GetOrderV3 extends AbstractRequest
{
  /**
   * Client Order ID has the value that was passed in when the Order was posted.
   */
  protected $client_order_id;

  /**
   * Order reference
   */
  protected $id;
  
  /**
   * @return string
   */
  public function getClientOrderId(): string
  {
    if (!isset($this->client_order_id)) {
      return "";
    }
    return $this->client_order_id;
  }

  /**
   * @param string $clientOrderId
   */
  public function setClientOrderId(string $clientOrderId)
  {
    $this->client_order_id = $clientOrderId;
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    if (!isset($this->id)) {
      return "";
    }
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id)
  {
    $this->id = $id;
  }
}

// vi: ft=php
