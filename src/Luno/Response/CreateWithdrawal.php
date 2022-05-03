<?php declare(strict_types=1);

namespace Luno\Response;

class CreateWithdrawal extends AbstractResponse
{
  /**
   * Amount to withdraw
   */
  protected $amount;

  /**
   * Unix time the withdrawal was initiated, in milliseconds
   */
  protected $created_at;

  /**
   * Withdrawal currency.
   */
  protected $currency;

  /**
   * External ID has the value that was passed in when the Withdrawal request was posted.
   */
  protected $external_id;

  /**
   * Withdrawal fee
   */
  protected $fee;
  protected $id;

  /**
   * Status
   */
  protected $status;

  /**
   * Type distinguishes between different withdrawal methods where more than one is supported
   * for the given currency.
   */
  protected $type;
  
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
   * @return int
   */
  public function getCreatedAt(): int
  {
    if (!isset($this->created_at)) {
      return 0;
    }
    return $this->created_at;
  }

  /**
   * @param int $createdAt
   */
  public function setCreatedAt(int $createdAt)
  {
    $this->created_at = $createdAt;
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

  /**
   * @return float
   */
  public function getFee(): float
  {
    if (!isset($this->fee)) {
      return 0;
    }
    return $this->fee;
  }

  /**
   * @param float $fee
   */
  public function setFee(float $fee)
  {
    $this->fee = $fee;
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

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }
}

// vi: ft=php
