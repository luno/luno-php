<?php

namespace Luno\Request;

class GetOrder extends AbstractRequest
{
  /**
   * The order ID.
   */
  protected $id;

  public function getId(): string {
    return $this->id;
  }

  public function setId(string $id) {
    $this->id = $id;
  }
}

// vi: ft=php
