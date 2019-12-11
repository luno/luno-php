<?php declare(strict_types=1);

namespace Luno\Request;

class SendLightning extends AbstractRequest
{
  /**
   * Lightning payment request to send to.
   */
  protected $payment_request;

  /**
   * Currency to send.
   */
  protected $currency;

  /**
   * Description for the transaction to record on the account statement.
   */
  protected $description;

  /**
   * Optional unique ID to associate with this withdrawal. Useful to prevent
   * duplicate sends in case of failure. It supports all alphanumeric
   * characters, as well as "-" and "_".
   */
  protected $external_id;
  
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
   * @return string
   */
  public function getCurrency(): string
  {
    if (!isset($this->currency)) {
      return "";
    }
    return $this->currency;
  }

  /**
   * @param string $currency
   */
  public function setCurrency(string $currency)
  {
    $this->currency = $currency;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    if (!isset($this->description)) {
      return "";
    }
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  /**
   * @return string
   */
  public function getExternalId(): string
  {
    if (!isset($this->external_id)) {
      return "";
    }
    return $this->external_id;
  }

  /**
   * @param string $externalId
   */
  public function setExternalId(string $externalId)
  {
    $this->external_id = $externalId;
  }
}

// vi: ft=php
