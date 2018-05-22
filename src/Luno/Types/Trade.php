<?php

namespace Luno\Types;

class Trade
{
  protected $base;
  protected $counter;
  protected $fee_base;
  protected $fee_counter;
  protected $is_buy;
  protected $order_id;
  protected $pair;
  protected $price;
  protected $timestamp;
  protected $type;
  protected $volume;

  public function getBase(): float {
    return $this->base;
  }

  public function getCounter(): float {
    return $this->counter;
  }

  public function getFeeBase(): float {
    return $this->fee_base;
  }

  public function getFeeCounter(): float {
    return $this->fee_counter;
  }

  public function getIsBuy(): boolean {
    return $this->is_buy;
  }

  public function getOrderId(): string {
    return $this->order_id;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function getPrice(): float {
    return $this->price;
  }

  public function getTimestamp(): integer {
    return $this->timestamp;
  }

  public function getType(): string {
    return $this->type;
  }

  public function getVolume(): float {
    return $this->volume;
  }
}

// vi: ft=php
