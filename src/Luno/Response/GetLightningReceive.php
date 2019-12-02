<?php declare(strict_types=1);

namespace Luno\Response;

class GetLightningReceive extends AbstractResponse
{
  protected $payment_request;
  protected $settled_amount;
  protected $status;
  
  /**
   * @return string
   */
  public function getPaymentRequest(): string
  {
    if (!isset($this->payment_request)) {
      return "";
    }
    return $this->payment_request;
  }

  /**
   * @param string $paymentRequest
   */
  public function setPaymentRequest(string $paymentRequest)
  {
    $this->payment_request = $paymentRequest;
  }

  /**
   * @return float
   */
  public function getSettledAmount(): float
  {
    if (!isset($this->settled_amount)) {
      return 0;
    }
    return $this->settled_amount;
  }

  /**
   * @param float $settledAmount
   */
  public function setSettledAmount(float $settledAmount)
  {
    $this->settled_amount = $settledAmount;
  }

  /**
   * @return string
   */
  public function getStatus(): string
  {
    if (!isset($this->status)) {
      return "";
    }
    return $this->status;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status)
  {
    $this->status = $status;
  }
}

// vi: ft=php
