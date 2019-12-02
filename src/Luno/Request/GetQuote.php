<?php declare(strict_types=1);

namespace Luno\Request;

class GetQuote extends AbstractRequest
{
  /**
   * ID of the quote to retrieve.
   */
  protected $id;
  
  /**
   * @return int
   */
  public function getId(): int
  {
    if (!isset($this->id)) {
      return 0;
    }
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id)
  {
    $this->id = $id;
  }
}

// vi: ft=php
