<?php declare(strict_types=1);

namespace Luno\Response;

class ReceiveLightning extends AbstractResponse
{
  protected $invoice_id;
  protected $payment_request;
  
  /**
   * @return string
   */
  public function getInvoiceId(): string
  {
    if (!isset($this->invoice_id)) {
      return "";
    }
    return $this->invoice_id;
  }

  /**
   * @param string $invoiceId
   */
  public function setInvoiceId(string $invoiceId)
  {
    $this->invoice_id = $invoiceId;
  }

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
}

// vi: ft=php
