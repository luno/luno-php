<?php declare(strict_types=1);

namespace Luno\Request;

class ListPendingTransactions extends AbstractRequest
{
  /**
   * Account ID
   */
  protected $id;
  
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
}

// vi: ft=php
