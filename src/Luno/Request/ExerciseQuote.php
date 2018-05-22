<?php

namespace Luno\Request;

class ExerciseQuote extends AbstractRequest
{
  /**
   * ID of the quote to exercise.
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
