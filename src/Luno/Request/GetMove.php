<?php declare(strict_types=1);

namespace Luno\Request;

class GetMove extends AbstractRequest
{
  /**
   * Get by the user defined ID. This is mutually exclusive with <code>id</code> and is required if <code>id</code> is
   * not provided.
   */
  protected $client_move_id;

  /**
   * Get by the system ID. This is mutually exclusive with <code>client_move_id</code> and is required if
   * <code>client_move_id</code> is not provided.
   */
  protected $id;
  
  /**
   * @return string
   */
  public function getClientMoveId(): string
  {
    if (!isset($this->client_move_id)) {
      return "";
    }
    return $this->client_move_id;
  }

  /**
   * @param string $clientMoveId
   */
  public function setClientMoveId(string $clientMoveId)
  {
    $this->client_move_id = $clientMoveId;
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
}

// vi: ft=php
