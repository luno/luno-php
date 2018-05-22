<?php

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
  protected $row_index;
  protected $timestamp;

  public function getAccountId(): string {
    return $this->account_id;
  }

  public function getAvailable(): float {
    return $this->available;
  }

  public function getAvailableDelta(): float {
    return $this->available_delta;
  }

  public function getBalance(): float {
    return $this->balance;
  }

  public function getBalanceDelta(): float {
    return $this->balance_delta;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function getRowIndex(): integer {
    return $this->row_index;
  }

  public function getTimestamp(): integer {
    return $this->timestamp;
  }
}

// vi: ft=php
