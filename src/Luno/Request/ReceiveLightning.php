<?php declare(strict_types=1);

namespace Luno\Request;

class ReceiveLightning extends AbstractRequest
{
  /**
   * Amount to send as a decimal string.
   */
  protected $amount;

  /**
   * Currency to receive (defaults to XBT).
   */
  protected $currency;

  /**
   * User defined description to add to lightning invoice.
   */
  protected $description;

  /**
   * Unix expiry timestamp (ms).
   * 
   * in query
   */
  protected $expires_at;
  
  /**
   * @return float
   */
  public function getAmount(): float
  {
    if (!isset($this->amount)) {
      return 0;
    }
    return $this->amount;
  }

  /**
   * @param float $amount
   */
  public function setAmount(float $amount)
  {
    $this->amount = $amount;
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
   * @return int
   */
  public function getExpiresAt(): int
  {
    if (!isset($this->expires_at)) {
      return 0;
    }
    return $this->expires_at;
  }

  /**
   * @param int $expiresAt
   */
  public function setExpiresAt(int $expiresAt)
  {
    $this->expires_at = $expiresAt;
  }
}

// vi: ft=php
