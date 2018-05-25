<?php declare(strict_types=1);

namespace Luno\Types;

class AccountBalance
{
  protected $account_id;
  protected $asset;
  protected $balance;
  protected $name;
  protected $reserved;
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
