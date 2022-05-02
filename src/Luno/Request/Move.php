<?php declare(strict_types=1);

namespace Luno\Request;

class Move extends AbstractRequest
{
  /**
   * Amount to transfer. Must be positive.
   */
  protected $amount;

  /**
   * The account to credit the funds to.
   */
  protected $credit_account_id;

  /**
   * The account to debit the funds from.
   */
  protected $debit_account_id;

  /**
   * Client move ID.
   * May only contain alphanumeric (0-9, a-z, or A-Z) and special characters (_ ; , . -). Maximum length: 255.
   * It will be available in read endpoints, so you can use it to avoid duplicate moves between the same accounts.
   * Values must be unique across all your successful calls of this endpoint; trying to create a move request
   * with the same `client_move_id` as one of your past move requests will result in a HTTP 409 Conflict response.
   */
  protected $client_move_id;
  
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
  public function getCreditAccountId(): int
  {
    if (!isset($this->credit_account_id)) {
      return 0;
    }
    return $this->credit_account_id;
  }

  /**
   * @param int $creditAccountId
   */
  public function setCreditAccountId(int $creditAccountId)
  {
    $this->credit_account_id = $creditAccountId;
  }

  /**
   * @return int
   */
  public function getDebitAccountId(): int
  {
    if (!isset($this->debit_account_id)) {
      return 0;
    }
    return $this->debit_account_id;
  }

  /**
   * @param int $debitAccountId
   */
  public function setDebitAccountId(int $debitAccountId)
  {
    $this->debit_account_id = $debitAccountId;
  }

  /**
   * @return string
   */
  public function getClientMoveId(): string
  {
    if (!isset($this->client_move_id)) {
      return "";
    }
    return $this->client_move_id;
  }

  /**
   * @param string $clientMoveId
   */
  public function setClientMoveId(string $clientMoveId)
  {
    $this->client_move_id = $clientMoveId;
  }
}

// vi: ft=php
