<?php declare(strict_types=1);

namespace Luno\Response;

class ListMoves extends AbstractResponse
{
  protected $moves;
  
  /**
   * @return \Luno\Types\FundsMove[]
   */
  public function getMoves(): array
  {
    if (!isset($this->moves)) {
      return [];
    }
    return $this->moves;
  }

  /**
   * @param \Luno\Types\FundsMove[] $moves
   */
  public function setMoves(array $moves)
  {
    $this->moves = $moves;
  }
}

// vi: ft=php
