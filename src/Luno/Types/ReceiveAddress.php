<?php declare(strict_types=1);

namespace Luno\Types;

class ReceiveAddress
{
  protected $account_id;
  protected $address;
  protected $asset;
  protected $assigned_at;
  protected $name;
  protected $receive_fee;
  protected $total_received;
  protected $total_unconfirmed;
  
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
  public function getAddress(): string
  {
    if (!isset($this->address)) {
      return "";
    }
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address)
  {
    $this->address = $address;
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
   * @return int
   */
  public function getAssignedAt(): int
  {
    if (!isset($this->assigned_at)) {
      return 0;
    }
    return $this->assigned_at;
  }

  /**
   * @param int $assignedAt
   */
  public function setAssignedAt(int $assignedAt)
  {
    $this->assigned_at = $assignedAt;
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
  public function getReceiveFee(): float
  {
    if (!isset($this->receive_fee)) {
      return 0;
    }
    return $this->receive_fee;
  }

  /**
   * @param float $receiveFee
   */
  public function setReceiveFee(float $receiveFee)
  {
    $this->receive_fee = $receiveFee;
  }

  /**
   * @return float
   */
  public function getTotalReceived(): float
  {
    if (!isset($this->total_received)) {
      return 0;
    }
    return $this->total_received;
  }

  /**
   * @param float $totalReceived
   */
  public function setTotalReceived(float $totalReceived)
  {
    $this->total_received = $totalReceived;
  }

  /**
   * @return float
   */
  public function getTotalUnconfirmed(): float
  {
    if (!isset($this->total_unconfirmed)) {
      return 0;
    }
    return $this->total_unconfirmed;
  }

  /**
   * @param float $totalUnconfirmed
   */
  public function setTotalUnconfirmed(float $totalUnconfirmed)
  {
    $this->total_unconfirmed = $totalUnconfirmed;
  }

}

// vi: ft=php
