<?php declare(strict_types=1);

namespace Luno\Response;

class StopOrder extends AbstractResponse
{
  protected $success;
  
  /**
   * @return bool
   */
  public function getSuccess(): bool
  {
    if (!isset($this->success)) {
      return false;
    }
    return $this->success;
  }

  /**
   * @param bool $success
   */
  public function setSuccess(bool $success)
  {
    $this->success = $success;
  }
}

// vi: ft=php
