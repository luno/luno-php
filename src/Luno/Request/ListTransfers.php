<?php declare(strict_types=1);

namespace Luno\Request;

class ListTransfers extends AbstractRequest
{
  /**
   * Unique identifier of the account to list the transfers from.
   */
  protected $account_id;

  /**
   * Filter to transfers created before this timestamp (Unix milliseconds).
   * The default value (0) will return the latest transfers on the account.
   */
  protected $before;

  /**
   * Limit to this many transfers.
   */
  protected $limit;
  
  /**
   * @return int
   */
  public function getAccountId(): int
  {
    if (!isset($this->account_id)) {
      return 0;
    }
    return $this->account_id;
  }

  /**
   * @param int $accountId
   */
  public function setAccountId(int $accountId)
  {
    $this->account_id = $accountId;
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
