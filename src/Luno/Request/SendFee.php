<?php declare(strict_types=1);

namespace Luno\Request;

class SendFee extends AbstractRequest
{
  /**
   * Destination address or email address.
   * 
   * <b>Note</b>:
   * <ul>
   * <li>Ethereum addresses must be
   * <a href="https://github.com/ethereum/EIPs/blob/master/EIPS/eip-55.md" target="_blank" rel="nofollow">checksummed</a>.</li>
   * <li>Ethereum sends to email addresses are not supported.</li>
   * </ul>
   */
  protected $address;

  /**
   * Amount to send as a decimal string.
   */
  protected $amount;

  /**
   * Currency to send.
   */
  protected $currency;
  
  /**
   * @return string
   */
  public function getAddress(): string
  {
    if (!isset($this->address)) {
      return "";
    }
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address)
  {
    $this->address = $address;
  }

  /**
   * @return float
   */
  public function getAmount(): float
  {
    if (!isset($this->amount)) {
      return 0;
    }
    return $this->amount;
  }

  /**
   * @param float $amount
   */
  public function setAmount(float $amount)
  {
    $this->amount = $amount;
  }

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
}

// vi: ft=php
