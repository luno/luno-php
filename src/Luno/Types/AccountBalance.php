<?php

namespace Luno\Types;

class AccountBalance
{
  protected $account_id;
  protected $asset;
  protected $balance;
  protected $name;
  protected $reserved;
  protected $unconfirmed;

  public function getAccountId(): string {
    return $this->account_id;
  }

  public function getAsset(): string {
    return $this->asset;
  }

  public function getBalance(): float {
    return $this->balance;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getReserved(): float {
    return $this->reserved;
  }

  public function getUnconfirmed(): float {
    return $this->unconfirmed;
  }
}

// vi: ft=php
