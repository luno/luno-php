<?php declare(strict_types=1);

namespace Luno\Types;

class DetailFields
{
  protected $crypto_details;
  
  /**
   * @return CryptoDetails
   */
  public function getCryptoDetails(): CryptoDetails
  {
    if (!isset($this->crypto_details)) {
      return null;
    }
    return $this->crypto_details;
  }

  /**
   * @param CryptoDetails $cryptoDetails
   */
  public function setCryptoDetails(CryptoDetails $cryptoDetails)
  {
    $this->crypto_details = $cryptoDetails;
  }

}

// vi: ft=php
