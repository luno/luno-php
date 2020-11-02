<?php declare(strict_types=1);

namespace Luno\Request;

class ListOrdersV2 extends AbstractRequest
{
  /**
   * If true, will return closed orders instead of open orders.
   */
  protected $closed;

  /**
   * Filter to orders created before this timestamp (Unix milliseconds)
   */
  protected $created_before;

  /**
   * Limit to this many orders
   */
  protected $limit;

  /**
   * Filter to only orders of this currency pair.
   */
  protected $pair;
  
  /**
   * @return bool
   */
  public function getClosed(): bool
  {
    if (!isset($this->closed)) {
      return false;
    }
    return $this->closed;
  }

  /**
   * @param bool $closed
   */
  public function setClosed(bool $closed)
  {
    $this->closed = $closed;
  }

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
}

// vi: ft=php
