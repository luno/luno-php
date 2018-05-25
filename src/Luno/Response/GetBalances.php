<?php declare(strict_types=1);

namespace Luno\Response;

class GetBalances extends AbstractResponse
{
  protected $balance;
  
  /**
   * @return \Luno\Types\AccountBalance[]
   */
  public function getBalance(): array
  {
    if (!isset($this->balance)) {
      return [];
    }
    return $this->balance;
  }

  /**
   * @param \Luno\Types\AccountBalance[] $balance
   */
  public function setBalance(array $balance)
  {
    $this->balance = $balance;
  }
}

// vi: ft=php
