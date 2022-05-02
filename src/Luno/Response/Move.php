<?php declare(strict_types=1);

namespace Luno\Response;

class Move extends AbstractResponse
{
  /**
   * Move unique identifier
   */
  protected $id;

  /**
   * The current state of the move.
   * 
   * Status meaning:<br>
   * <code>CREATED</code> The move is awaiting execution.<br>
   * <code>MOVING</code> The funds have been reserved and the move is being executed.<br>
   * <code>SUCCESSFUL</code> The move has completed successfully and should be reflected in both accounts available
   * balance.<br>
   * <code>FAILED</code> The move has failed. There could be many reasons for this but the most likely is that the
   * debit account doesn't have enough available funds to move.<br>
   */
  protected $status;
  
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
  public function getStatus(): string
  {
    if (!isset($this->status)) {
      return "";
    }
    return $this->status;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status)
  {
    $this->status = $status;
  }
}

// vi: ft=php
