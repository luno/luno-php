<?php declare(strict_types=1);

namespace Luno\Response;

class Send extends AbstractResponse
{
  protected $success;
  protected $withdrawal_id;
  
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

  /**
   * @return string
   */
  public function getWithdrawalId(): string
  {
    if (!isset($this->withdrawal_id)) {
      return "";
    }
    return $this->withdrawal_id;
  }

  /**
   * @param string $withdrawalId
   */
  public function setWithdrawalId(string $withdrawalId)
  {
    $this->withdrawal_id = $withdrawalId;
  }
}

// vi: ft=php
