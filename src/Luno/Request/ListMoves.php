<?php declare(strict_types=1);

namespace Luno\Request;

class ListMoves extends AbstractRequest
{
  /**
   * Filter to moves requested before this timestamp (Unix milliseconds)
   */
  protected $before;

  /**
   * Limit to this many moves
   */
  protected $limit;
  
  /**
   * @return int
   */
  public function getBefore(): int
  {
    if (!isset($this->before)) {
      return 0;
    }
    return $this->before;
  }

  /**
   * @param int $before
   */
  public function setBefore(int $before)
  {
    $this->before = $before;
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
}

// vi: ft=php
