<?php declare(strict_types=1);

namespace Luno\Request;

class ListUserTrades extends AbstractRequest
{
  /**
   * Filter to trades of this currency pair.
   */
  protected $pair;

  /**
   * Filter to trades from (including) this sequence number.
   * Default behaviour is not to include this filter.
   */
  protected $after_seq;

  /**
   * Filter to trades before this timestamp (Unix milliseconds).
   */
  protected $before;

  /**
   * Filter to trades before (excluding) this sequence number.
   * Default behaviour is not to include this filter.
   */
  protected $before_seq;

  /**
   * Limit to this number of trades (default 100).
   */
  protected $limit;

  /**
   * Filter to trades on or after this timestamp (Unix milliseconds).
   */
  protected $since;

  /**
   * If set to true, sorts trades in descending order, otherwise ascending
   * order will be assumed.
   */
  protected $sort_desc;
  
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
   * @return int
   */
  public function getAfterSeq(): int
  {
    if (!isset($this->after_seq)) {
      return 0;
    }
    return $this->after_seq;
  }

  /**
   * @param int $afterSeq
   */
  public function setAfterSeq(int $afterSeq)
  {
    $this->after_seq = $afterSeq;
  }

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
  public function getBeforeSeq(): int
  {
    if (!isset($this->before_seq)) {
      return 0;
    }
    return $this->before_seq;
  }

  /**
   * @param int $beforeSeq
   */
  public function setBeforeSeq(int $beforeSeq)
  {
    $this->before_seq = $beforeSeq;
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
   * @return int
   */
  public function getSince(): int
  {
    if (!isset($this->since)) {
      return 0;
    }
    return $this->since;
  }

  /**
   * @param int $since
   */
  public function setSince(int $since)
  {
    $this->since = $since;
  }

  /**
   * @return bool
   */
  public function getSortDesc(): bool
  {
    if (!isset($this->sort_desc)) {
      return false;
    }
    return $this->sort_desc;
  }

  /**
   * @param bool $sortDesc
   */
  public function setSortDesc(bool $sortDesc)
  {
    $this->sort_desc = $sortDesc;
  }
}

// vi: ft=php
