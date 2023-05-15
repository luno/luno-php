<?php declare(strict_types=1);

namespace Luno\Types;

class Transaction
{
  protected $account_id;

  /**
   * Amount available
   */
  protected $available;

  /**
   * Change in amount available
   */
  protected $available_delta;

  /**
   * Account balance
   */
  protected $balance;

  /**
   * Change in balance
   */
  protected $balance_delta;
  protected $currency;

  /**
   * Human-readable description of the transaction.
   */
  protected $description;
  protected $detail_fields;

  /**
   * Human-readable label-value attributes.
   */
  protected $details;

  /**
   * The kind of the transaction indicates the transaction flow
   * 
   * Kinds explained:<br>
   * <code>FEE</code> when transaction is towards Luno fees<br>
   * <code>TRANSFER</code> when the transaction is a one way flow of funds, e.g. a deposit or crypto send<br>
   * <code>EXCHANGE</code> when the transaction is part of a two way exchange, e.g. a trade or instant buy
   */
  protected $kind;

  /**
   * A unique reference for the transaction this statement entry relates to.
   * There may be multiple statement entries related to the same transaction.
   * E.g. a withdrawal and the withdrawal fee are two separate statement entries with the same reference.
   */
  protected $reference;
  protected $row_index;

  /**
   * Unix timestamp, in milliseconds
   */
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
   * @return DetailFields
   */
  public function getDetailFields(): DetailFields
  {
    if (!isset($this->detail_fields)) {
      return null;
    }
    return $this->detail_fields;
  }

  /**
   * @param DetailFields $detailFields
   */
  public function setDetailFields(DetailFields $detailFields)
  {
    $this->detail_fields = $detailFields;
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
   * @return string
   */
  public function getKind(): string
  {
    if (!isset($this->kind)) {
      return "";
    }
    return $this->kind;
  }

  /**
   * @param string $kind
   */
  public function setKind(string $kind)
  {
    $this->kind = $kind;
  }

  /**
   * @return string
   */
  public function getReference(): string
  {
    if (!isset($this->reference)) {
      return "";
    }
    return $this->reference;
  }

  /**
   * @param string $reference
   */
  public function setReference(string $reference)
  {
    $this->reference = $reference;
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
