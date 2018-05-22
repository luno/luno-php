<?php

namespace Luno\Request;

class CancelWithdrawal extends AbstractRequest
{
  /**
   * ID of the withdrawal to cancel.
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
