<?php

namespace Luno\Types;

class Withdrawal
{
  protected $amount;
  protected $created_at;
  protected $currency;
  protected $fee;
  protected $id;
  protected $status;
  protected $type;

  public function getAmount(): float {
    return $this->amount;
  }

  public function getCreatedAt(): integer {
    return $this->created_at;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function getFee(): float {
    return $this->fee;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getStatus(): string {
    return $this->status;
  }

  public function getType(): string {
    return $this->type;
  }
}

// vi: ft=php
