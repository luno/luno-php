<?php declare(strict_types=1);

namespace Luno\Response;

class SendLightning extends AbstractResponse
{
  protected $status;
  protected $withdrawal_id;
  
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
