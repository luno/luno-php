<?php declare(strict_types=1);

namespace Luno\Response;

class ListTransfers extends AbstractResponse
{
  protected $transfers;
  
  /**
   * @return \Luno\Types\Transfer[]
   */
  public function getTransfers(): array
  {
    if (!isset($this->transfers)) {
      return [];
    }
    return $this->transfers;
  }

  /**
   * @param \Luno\Types\Transfer[] $transfers
   */
  public function setTransfers(array $transfers)
  {
    $this->transfers = $transfers;
  }
}

// vi: ft=php
