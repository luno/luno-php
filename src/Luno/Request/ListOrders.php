<?php declare(strict_types=1);

namespace Luno\Request;

class ListOrders extends AbstractRequest
{
  /**
   * Filter to orders created before this timestamp (Unix milliseconds)
   */
  protected $created_before;

  /**
   * Limit to this many orders
   */
  protected $limit;

  /**
   * Filter to only orders of this currency pair
   */
  protected $pair;

  /**
   * Filter to only orders of this state
   */
  protected $state;
  
  /**
   * @return int
   */
  public function getCreatedBefore(): int
  {
    if (!isset($this->created_before)) {
      return 0;
    }
    return $this->created_before;
  }

  /**
   * @param int $createdBefore
   */
  public function setCreatedBefore(int $createdBefore)
  {
    $this->created_before = $createdBefore;
  }

  /**
   * @return int
   */
  public function getLimit(): int
  {
    if (!isset($this->limit)) {
      return 0;
    }
    return $this->limit;
  }

  /**
   * @param int $limit
   */
  public function setLimit(int $limit)
  {
    $this->limit = $limit;
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
}

// vi: ft=php
