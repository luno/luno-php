<?php declare(strict_types=1);

namespace Luno\Response;

class ListWithdrawals extends AbstractResponse
{
  protected $withdrawals;
  
  /**
   * @return \Luno\Types\Withdrawal[]
   */
  public function getWithdrawals(): array
  {
    if (!isset($this->withdrawals)) {
      return [];
    }
    return $this->withdrawals;
  }

  /**
   * @param \Luno\Types\Withdrawal[] $withdrawals
   */
  public function setWithdrawals(array $withdrawals)
  {
    $this->withdrawals = $withdrawals;
  }
}

// vi: ft=php
