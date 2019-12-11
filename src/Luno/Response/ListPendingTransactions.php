<?php declare(strict_types=1);

namespace Luno\Response;

use Luno\Types\DetailFields;

class ListPendingTransactions extends AbstractResponse
{
  protected $currency;
  protected $id;
  protected $name;
  protected $pending;
  protected $transactions;
  
  /**
   * @return string
   */
  public function getCurrency(): string
  {
    if (!isset($this->currency)) {
      return "";
    }
    return $this->currency;
  }

  /**
   * @param string $currency
   */
  public function setCurrency(string $currency)
  {
    $this->currency = $currency;
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
  public function getName(): string
  {
    if (!isset($this->name)) {
      return "";
    }
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * @return \Luno\Types\Transaction[]
   */
  public function getPending(): array
  {
    if (!isset($this->pending)) {
      return [];
    }
    return $this->pending;
  }

  /**
   * @param \Luno\Types\Transaction[] $pending
   */
  public function setPending(array $pending)
  {
    $this->pending = $pending;
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
