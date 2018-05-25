<?php declare(strict_types=1);

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
  
  /**
   * @return float
   */
  public function getBase(): float
  {
    if (!isset($this->base)) {
      return 0;
    }
    return $this->base;
  }

  /**
   * @param float $base
   */
  public function setBase(float $base)
  {
    $this->base = $base;
  }

  /**
   * @return int
   */
  public function getCompletedTimestamp(): int
  {
    if (!isset($this->completed_timestamp)) {
      return 0;
    }
    return $this->completed_timestamp;
  }

  /**
   * @param int $completedTimestamp
   */
  public function setCompletedTimestamp(int $completedTimestamp)
  {
    $this->completed_timestamp = $completedTimestamp;
  }

  /**
   * @return float
   */
  public function getCounter(): float
  {
    if (!isset($this->counter)) {
      return 0;
    }
    return $this->counter;
  }

  /**
   * @param float $counter
   */
  public function setCounter(float $counter)
  {
    $this->counter = $counter;
  }

  /**
   * @return int
   */
  public function getCreationTimestamp(): int
  {
    if (!isset($this->creation_timestamp)) {
      return 0;
    }
    return $this->creation_timestamp;
  }

  /**
   * @param int $creationTimestamp
   */
  public function setCreationTimestamp(int $creationTimestamp)
  {
    $this->creation_timestamp = $creationTimestamp;
  }

  /**
   * @return int
   */
  public function getExpirationTimestamp(): int
  {
    if (!isset($this->expiration_timestamp)) {
      return 0;
    }
    return $this->expiration_timestamp;
  }

  /**
   * @param int $expirationTimestamp
   */
  public function setExpirationTimestamp(int $expirationTimestamp)
  {
    $this->expiration_timestamp = $expirationTimestamp;
  }

  /**
   * @return float
   */
  public function getFeeBase(): float
  {
    if (!isset($this->fee_base)) {
      return 0;
    }
    return $this->fee_base;
  }

  /**
   * @param float $feeBase
   */
  public function setFeeBase(float $feeBase)
  {
    $this->fee_base = $feeBase;
  }

  /**
   * @return float
   */
  public function getFeeCounter(): float
  {
    if (!isset($this->fee_counter)) {
      return 0;
    }
    return $this->fee_counter;
  }

  /**
   * @param float $feeCounter
   */
  public function setFeeCounter(float $feeCounter)
  {
    $this->fee_counter = $feeCounter;
  }

  /**
   * @return float
   */
  public function getLimitPrice(): float
  {
    if (!isset($this->limit_price)) {
      return 0;
    }
    return $this->limit_price;
  }

  /**
   * @param float $limitPrice
   */
  public function setLimitPrice(float $limitPrice)
  {
    $this->limit_price = $limitPrice;
  }

  /**
   * @return float
   */
  public function getLimitVolume(): float
  {
    if (!isset($this->limit_volume)) {
      return 0;
    }
    return $this->limit_volume;
  }

  /**
   * @param float $limitVolume
   */
  public function setLimitVolume(float $limitVolume)
  {
    $this->limit_volume = $limitVolume;
  }

  /**
   * @return string
   */
  public function getOrderId(): string
  {
    if (!isset($this->order_id)) {
      return "";
    }
    return $this->order_id;
  }

  /**
   * @param string $orderId
   */
  public function setOrderId(string $orderId)
  {
    $this->order_id = $orderId;
  }

  /**
   * @return string
   */
  public function getPair(): string
  {
    if (!isset($this->pair)) {
      return "";
    }
    return $this->pair;
  }

  /**
   * @param string $pair
   */
  public function setPair(string $pair)
  {
    $this->pair = $pair;
  }

  /**
   * @return string
   */
  public function getState(): string
  {
    if (!isset($this->state)) {
      return "";
    }
    return $this->state;
  }

  /**
   * @param string $state
   */
  public function setState(string $state)
  {
    $this->state = $state;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

}

// vi: ft=php
