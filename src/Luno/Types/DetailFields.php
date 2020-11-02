<?php declare(strict_types=1);

namespace Luno\Types;

class DetailFields
{
  protected $crypto_details;
  protected $trade_details;
  
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

  /**
   * @return TradeDetails
   */
  public function getTradeDetails(): TradeDetails
  {
    if (!isset($this->trade_details)) {
      return null;
    }
    return $this->trade_details;
  }

  /**
   * @param TradeDetails $tradeDetails
   */
  public function setTradeDetails(TradeDetails $tradeDetails)
  {
    $this->trade_details = $tradeDetails;
  }

}

// vi: ft=php
