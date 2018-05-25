<?php declare(strict_types=1);

namespace Luno\Response;

class CreateQuote extends AbstractResponse
{
  protected $base_amount;
  protected $counter_amount;
  protected $created_at;
  protected $discarded;
  protected $exercised;
  protected $expires_at;
  protected $id;
  protected $pair;
  protected $type;
  
  /**
   * @return float
   */
  public function getBaseAmount(): float
  {
    if (!isset($this->base_amount)) {
      return 0;
    }
    return $this->base_amount;
  }

  /**
   * @param float $baseAmount
   */
  public function setBaseAmount(float $baseAmount)
  {
    $this->base_amount = $baseAmount;
  }

  /**
   * @return float
   */
  public function getCounterAmount(): float
  {
    if (!isset($this->counter_amount)) {
      return 0;
    }
    return $this->counter_amount;
  }

  /**
   * @param float $counterAmount
   */
  public function setCounterAmount(float $counterAmount)
  {
    $this->counter_amount = $counterAmount;
  }

  /**
   * @return int
   */
  public function getCreatedAt(): int
  {
    if (!isset($this->created_at)) {
      return 0;
    }
    return $this->created_at;
  }

  /**
   * @param int $createdAt
   */
  public function setCreatedAt(int $createdAt)
  {
    $this->created_at = $createdAt;
  }

  /**
   * @return bool
   */
  public function getDiscarded(): bool
  {
    if (!isset($this->discarded)) {
      return false;
    }
    return $this->discarded;
  }

  /**
   * @param bool $discarded
   */
  public function setDiscarded(bool $discarded)
  {
    $this->discarded = $discarded;
  }

  /**
   * @return bool
   */
  public function getExercised(): bool
  {
    if (!isset($this->exercised)) {
      return false;
    }
    return $this->exercised;
  }

  /**
   * @param bool $exercised
   */
  public function setExercised(bool $exercised)
  {
    $this->exercised = $exercised;
  }

  /**
   * @return int
   */
  public function getExpiresAt(): int
  {
    if (!isset($this->expires_at)) {
      return 0;
    }
    return $this->expires_at;
  }

  /**
   * @param int $expiresAt
   */
  public function setExpiresAt(int $expiresAt)
  {
    $this->expires_at = $expiresAt;
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    if (!isset($this->id)) {
      return "";
    }
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id)
  {
    $this->id = $id;
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
