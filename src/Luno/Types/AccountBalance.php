<?php declare(strict_types=1);

namespace Luno\Types;

class AccountBalance
{
  /**
   * ID of the account.
   */
  protected $account_id;

  /**
   * Currency code for the asset held in this account.
   */
  protected $asset;

  /**
   * The amount available to send or trade.
   */
  protected $balance;

  /**
   * The name set by the user upon creating the account.
   */
  protected $name;

  /**
   * Amount locked by Luno and cannot be sent or traded. This could be due to
   * open orders.
   */
  protected $reserved;

  /**
   * Amount that is awaiting some sort of verification to be credited to this
   * account. This could be an on-chain transaction that Luno is waiting for
   * further block verifications to happen.
   */
  protected $unconfirmed;
  
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
   * @return string
   */
  public function getAsset(): string
  {
    if (!isset($this->asset)) {
      return "";
    }
    return $this->asset;
  }

  /**
   * @param string $asset
   */
  public function setAsset(string $asset)
  {
    $this->asset = $asset;
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
   * @return string
   */
  public function getName(): string
  {
    if (!isset($this->name)) {
      return "";
    }
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * @return float
   */
  public function getReserved(): float
  {
    if (!isset($this->reserved)) {
      return 0;
    }
    return $this->reserved;
  }

  /**
   * @param float $reserved
   */
  public function setReserved(float $reserved)
  {
    $this->reserved = $reserved;
  }

  /**
   * @return float
   */
  public function getUnconfirmed(): float
  {
    if (!isset($this->unconfirmed)) {
      return 0;
    }
    return $this->unconfirmed;
  }

  /**
   * @param float $unconfirmed
   */
  public function setUnconfirmed(float $unconfirmed)
  {
    $this->unconfirmed = $unconfirmed;
  }

}

// vi: ft=php
