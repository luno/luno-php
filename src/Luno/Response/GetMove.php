<?php declare(strict_types=1);

namespace Luno\Response;

class GetMove extends AbstractResponse
{
  /**
   * The assets quantity to move from the debit account to credit account. This is always a positive value.
   */
  protected $amount;

  /**
   * User defined unique ID
   */
  protected $client_move_id;

  /**
   * Unix time the move was initiated, in milliseconds
   */
  protected $created_at;

  /**
   * The account to credit the funds to.
   */
  protected $credit_account_id;

  /**
   * The account to debit the funds from.
   */
  protected $debit_account_id;

  /**
   * Unique ID, defined by Luno
   */
  protected $id;

  /**
   * Current status of the move.
   * 
   * Status meaning:<br>
   * <code>CREATED</code> The move is awaiting execution.<br>
   * <code>MOVING</code> The funds have been reserved and the move is being executed.<br>
   * <code>SUCCESSFUL</code> The move has completed successfully and should be reflected in both accounts available
   * balance.<br>
   * <code>FAILED</code> The move has failed. There could be many reasons for this but the most likely is that the
   * debit account doesn't have enough available funds to move.<br>
   */
  protected $status;

  /**
   * Unix time the move was last updated, in milliseconds
   */
  protected $updated_at;
  
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
  public function getCreditAccountId(): string
  {
    if (!isset($this->credit_account_id)) {
      return "";
    }
    return $this->credit_account_id;
  }

  /**
   * @param string $creditAccountId
   */
  public function setCreditAccountId(string $creditAccountId)
  {
    $this->credit_account_id = $creditAccountId;
  }

  /**
   * @return string
   */
  public function getDebitAccountId(): string
  {
    if (!isset($this->debit_account_id)) {
      return "";
    }
    return $this->debit_account_id;
  }

  /**
   * @param string $debitAccountId
   */
  public function setDebitAccountId(string $debitAccountId)
  {
    $this->debit_account_id = $debitAccountId;
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
   * @return int
   */
  public function getUpdatedAt(): int
  {
    if (!isset($this->updated_at)) {
      return 0;
    }
    return $this->updated_at;
  }

  /**
   * @param int $updatedAt
   */
  public function setUpdatedAt(int $updatedAt)
  {
    $this->updated_at = $updatedAt;
  }
}

// vi: ft=php
