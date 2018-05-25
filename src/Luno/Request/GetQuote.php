<?php declare(strict_types=1);

namespace Luno\Request;

class GetQuote extends AbstractRequest
{
  /**
   * ID of the quote to retrieve.
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
