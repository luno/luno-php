<?php

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

  public function getCreatedBefore(): integer {
    return $this->created_before;
  }

  public function setCreatedBefore(integer $createdBefore) {
    $this->created_before = $createdBefore;
  }

  public function getLimit(): integer {
    return $this->limit;
  }

  public function setLimit(integer $limit) {
    $this->limit = $limit;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function setPair(string $pair) {
    $this->pair = $pair;
  }

  public function getState(): string /* OrderState */ {
    return $this->state;
  }

  public function setState(string /* OrderState */ $state) {
    $this->state = $state;
  }
}

// vi: ft=php
