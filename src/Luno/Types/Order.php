<?php

namespace Luno\Types;

class Order
{
  protected $base;
  protected $completed_timestamp;
  protected $counter;
  protected $creation_timestamp;
  protected $expiration_timestamp;
  protected $fee_base;
  protected $fee_counter;
  protected $limit_price;
  protected $limit_volume;
  protected $order_id;

  /**
   * Specifies the market.
   */
  protected $pair;

  /**
   * <code>PENDING</code> The order has been placed. Some trades may have
   * taken place but the order is not filled yet.<br>
   * <code>COMPLETE</code> The order is no longer active. It has been settled
   * or has been cancelled.
   */
  protected $state;

  /**
   * <code>BID</code> bid (buy) limit order.<br>
   * <code>ASK</code> ask (sell) limit order.
   */
  protected $type;

  public function getBase(): float {
    return $this->base;
  }

  public function getCompletedTimestamp(): integer {
    return $this->completed_timestamp;
  }

  public function getCounter(): float {
    return $this->counter;
  }

  public function getCreationTimestamp(): integer {
    return $this->creation_timestamp;
  }

  public function getExpirationTimestamp(): integer {
    return $this->expiration_timestamp;
  }

  public function getFeeBase(): float {
    return $this->fee_base;
  }

  public function getFeeCounter(): float {
    return $this->fee_counter;
  }

  public function getLimitPrice(): float {
    return $this->limit_price;
  }

  public function getLimitVolume(): float {
    return $this->limit_volume;
  }

  public function getOrderId(): string {
    return $this->order_id;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function getState(): string {
    return $this->state;
  }

  public function getType(): string {
    return $this->type;
  }
}

// vi: ft=php
