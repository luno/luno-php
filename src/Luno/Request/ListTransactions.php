<?php

namespace Luno\Request;

class ListTransactions extends AbstractRequest
{
  /**
   * Account ID
   */
  protected $id;

  /**
   * Maximum of the row range to return (exclusive)
   */
  protected $max_row;

  /**
   * Minimum of the row range to return (inclusive)
   */
  protected $min_row;

  public function getId(): integer {
    return $this->id;
  }

  public function setId(integer $id) {
    $this->id = $id;
  }

  public function getMaxRow(): integer {
    return $this->max_row;
  }

  public function setMaxRow(integer $maxRow) {
    $this->max_row = $maxRow;
  }

  public function getMinRow(): integer {
    return $this->min_row;
  }

  public function setMinRow(integer $minRow) {
    $this->min_row = $minRow;
  }
}

// vi: ft=php
