<?php

namespace Luno\Request;

class GetWithdrawal extends AbstractRequest
{
  /**
   * Withdrawal ID to retrieve.
   */
  protected $id;

  public function getId(): integer {
    return $this->id;
  }

  public function setId(integer $id) {
    $this->id = $id;
  }
}

// vi: ft=php
