<?php

namespace Luno\Request;

class DiscardQuote extends AbstractRequest
{
  /**
   * ID of the quote to discard.
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
