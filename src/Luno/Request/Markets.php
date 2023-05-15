<?php declare(strict_types=1);

namespace Luno\Request;

class Markets extends AbstractRequest
{
  /**
   * List of market pairs to return. Requesting only the required pairs will improve response times.
   */
  protected $pair;
  
  /**
   * @return \Luno\Types\string[]
   */
  public function getPair(): array
  {
    if (!isset($this->pair)) {
      return [];
    }
    return $this->pair;
  }

  /**
   * @param \Luno\Types\string[] $pair
   */
  public function setPair(array $pair)
  {
    $this->pair = $pair;
  }
}

// vi: ft=php
