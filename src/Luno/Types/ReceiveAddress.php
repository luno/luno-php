<?php

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

  public function getAccountId(): string {
    return $this->account_id;
  }

  public function getAddress(): string {
    return $this->address;
  }

  public function getAsset(): string {
    return $this->asset;
  }

  public function getAssignedAt(): integer {
    return $this->assigned_at;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getReceiveFee(): float {
    return $this->receive_fee;
  }

  public function getTotalReceived(): float {
    return $this->total_received;
  }

  public function getTotalUnconfirmed(): float {
    return $this->total_unconfirmed;
  }
}

// vi: ft=php
