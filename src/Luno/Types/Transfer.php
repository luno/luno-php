<?php declare(strict_types=1);

namespace Luno\Types;

class Transfer
{
  /**
   * Amount that has been credited or debited on the account. This is always a
   * positive value regardless of the transfer direction.
   */
  protected $amount;

  /**
   * Unix timestamp the transfer was initiated, in milliseconds
   */
  protected $created_at;

  /**
   * Fee that has been charged by Luno with regards to this transfer.
   * This is not included in the `amount`.
   * For example, if you receive a transaction with the raw amount of 1 BTC
   * and we charge a `fee` of 0.003 BTC on this transaction you will be
   * credited the `amount` of 0.997 BTC.
   */
  protected $fee;

  /**
   * Transfer unique identifier
   */
  protected $id;

  /**
   * True for credit transfers, false for debits.
   */
  protected $inbound;

  /**
   * When the transfer reflects an on-chain transaction this field will have
   * the transaction ID.
   */
  protected $transaction_id;
  
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
   * @return bool
   */
  public function getInbound(): bool
  {
    if (!isset($this->inbound)) {
      return false;
    }
    return $this->inbound;
  }

  /**
   * @param bool $inbound
   */
  public function setInbound(bool $inbound)
  {
    $this->inbound = $inbound;
  }

  /**
   * @return string
   */
  public function getTransactionId(): string
  {
    if (!isset($this->transaction_id)) {
      return "";
    }
    return $this->transaction_id;
  }

  /**
   * @param string $transactionId
   */
  public function setTransactionId(string $transactionId)
  {
    $this->transaction_id = $transactionId;
  }

}

// vi: ft=php
