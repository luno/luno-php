<?php declare(strict_types=1);

namespace Luno\Response;

class SendFee extends AbstractResponse
{
  protected $currency;
  protected $fee;
  
  /**
   * @return string
   */
  public function getCurrency(): string
  {
    if (!isset($this->currency)) {
      return "";
    }
    return $this->currency;
  }

  /**
   * @param string $currency
   */
  public function setCurrency(string $currency)
  {
    $this->currency = $currency;
  }

  /**
   * @return float
   */
  public function getFee(): float
  {
    if (!isset($this->fee)) {
      return 0;
    }
    return $this->fee;
  }

  /**
   * @param float $fee
   */
  public function setFee(float $fee)
  {
    $this->fee = $fee;
  }
}

// vi: ft=php
