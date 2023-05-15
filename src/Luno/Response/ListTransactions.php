<?php declare(strict_types=1);

namespace Luno\Response;

use Luno\Types\DetailFields;

class ListTransactions extends AbstractResponse
{
  protected $id;
  protected $transactions;
  
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
   * @return \Luno\Types\Transaction[]
   */
  public function getTransactions(): array
  {
    if (!isset($this->transactions)) {
      return [];
    }
    return $this->transactions;
  }

  /**
   * @param \Luno\Types\Transaction[] $transactions
   */
  public function setTransactions(array $transactions)
  {
    $this->transactions = $transactions;
  }
}

// vi: ft=php
