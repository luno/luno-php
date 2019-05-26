<?php declare(strict_types=1);

namespace Luno\Types;

class Transaction
{
  protected $account_id;
  protected $available;
  protected $available_delta;
  protected $balance;

  /**
   * Transaction amounts computed for convenience.
   */
  protected $balance_delta;
  protected $currency;

  /**
   * Human-readable description of the transaction.
   */
  protected $description;

  /**
   * Human-readable label-value attributes.
   */
  protected $details;
  protected $row_index;
  protected $timestamp;
  
  /**
   * @return string
   */
  public function getAccountId(): string
  {
    if (!isset($this->account_id)) {
      return "";
    }
    return $this->account_id;
  }

  /**
   * @param string $accountId
   */
  public function setAccountId(string $accountId)
  {
    $this->account_id = $accountId;
  }

  /**
   * @return float
   */
  public function getAvailable(): float
  {
    if (!isset($this->available)) {
      return 0;
    }
    return $this->available;
  }

  /**
   * @param float $available
   */
  public function setAvailable(float $available)
  {
    $this->available = $available;
  }

  /**
   * @return float
   */
  public function getAvailableDelta(): float
  {
    if (!isset($this->available_delta)) {
      return 0;
    }
    return $this->available_delta;
  }

  /**
   * @param float $availableDelta
   */
  public function setAvailableDelta(float $availableDelta)
  {
    $this->available_delta = $availableDelta;
  }

  /**
   * @return float
   */
  public function getBalance(): float
  {
    if (!isset($this->balance)) {
      return 0;
    }
    return $this->balance;
  }

  /**
   * @param float $balance
   */
  public function setBalance(float $balance)
  {
    $this->balance = $balance;
  }

  /**
   * @return float
   */
  public function getBalanceDelta(): float
  {
    if (!isset($this->balance_delta)) {
      return 0;
    }
    return $this->balance_delta;
  }

  /**
   * @param float $balanceDelta
   */
  public function setBalanceDelta(float $balanceDelta)
  {
    $this->balance_delta = $balanceDelta;
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
   * @return array
   */
  public function getDetails(): array
  {
    if (!isset($this->details)) {
      return [];
    }
    return $this->details;
  }

  /**
   * @param array $details
   */
  public function setDetails(array $details)
  {
    $this->details = $details;
  }

  /**
   * @return int
   */
  public function getRowIndex(): int
  {
    if (!isset($this->row_index)) {
      return 0;
    }
    return $this->row_index;
  }

  /**
   * @param int $rowIndex
   */
  public function setRowIndex(int $rowIndex)
  {
    $this->row_index = $rowIndex;
  }

  /**
   * @return int
   */
  public function getTimestamp(): int
  {
    if (!isset($this->timestamp)) {
      return 0;
    }
    return $this->timestamp;
  }

  /**
   * @param int $timestamp
   */
  public function setTimestamp(int $timestamp)
  {
    $this->timestamp = $timestamp;
  }

}

// vi: ft=php
