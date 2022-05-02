<?php declare(strict_types=1);

namespace Luno\Types;

class TradeV2
{
  /**
   * Amount of base filled
   */
  protected $base;

  /**
   * Client Order ID has the value that was passed in when the Order was posted.
   */
  protected $client_order_id;

  /**
   * Amount of counter filled
   */
  protected $counter;

  /**
   * Base amount of fees charged
   */
  protected $fee_base;

  /**
   * Counter amount of fees charged
   */
  protected $fee_counter;
  protected $is_buy;

  /**
   * Unique order identifier
   */
  protected $order_id;

  /**
   * Currency pair
   */
  protected $pair;

  /**
   * Order price
   */
  protected $price;
  protected $sequence;

  /**
   * Unix timestamp in milliseconds
   */
  protected $timestamp;

  /**
   * Order type
   */
  protected $type;

  /**
   * Order volume
   */
  protected $volume;
  
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
   * @return string
   */
  public function getClientOrderId(): string
  {
    if (!isset($this->client_order_id)) {
      return "";
    }
    return $this->client_order_id;
  }

  /**
   * @param string $clientOrderId
   */
  public function setClientOrderId(string $clientOrderId)
  {
    $this->client_order_id = $clientOrderId;
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
   * @return bool
   */
  public function getIsBuy(): bool
  {
    if (!isset($this->is_buy)) {
      return false;
    }
    return $this->is_buy;
  }

  /**
   * @param bool $isBuy
   */
  public function setIsBuy(bool $isBuy)
  {
    $this->is_buy = $isBuy;
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
   * @return float
   */
  public function getPrice(): float
  {
    if (!isset($this->price)) {
      return 0;
    }
    return $this->price;
  }

  /**
   * @param float $price
   */
  public function setPrice(float $price)
  {
    $this->price = $price;
  }

  /**
   * @return int
   */
  public function getSequence(): int
  {
    if (!isset($this->sequence)) {
      return 0;
    }
    return $this->sequence;
  }

  /**
   * @param int $sequence
   */
  public function setSequence(int $sequence)
  {
    $this->sequence = $sequence;
  }

  /**
   * @return int
   */
  public function getTimestamp(): int
  {
    if (!isset($this->timestamp)) {
      return 0;
    }
    return $this->timestamp;
  }

  /**
   * @param int $timestamp
   */
  public function setTimestamp(int $timestamp)
  {
    $this->timestamp = $timestamp;
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

  /**
   * @return float
   */
  public function getVolume(): float
  {
    if (!isset($this->volume)) {
      return 0;
    }
    return $this->volume;
  }

  /**
   * @param float $volume
   */
  public function setVolume(float $volume)
  {
    $this->volume = $volume;
  }

}

// vi: ft=php
