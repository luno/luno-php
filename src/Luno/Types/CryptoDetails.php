<?php declare(strict_types=1);

namespace Luno\Types;

class CryptoDetails
{
  protected $address;
  protected $txid;
  
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
   * @return string
   */
  public function getTxid(): string
  {
    if (!isset($this->txid)) {
      return "";
    }
    return $this->txid;
  }

  /**
   * @param string $txid
   */
  public function setTxid(string $txid)
  {
    $this->txid = $txid;
  }

}

// vi: ft=php
