<?php declare(strict_types=1);

namespace Luno\Response;

class GetFeeInfo extends AbstractResponse
{
  protected $maker_fee;
  protected $taker_fee;
  protected $thirty_day_volume;
  
  /**
   * @return string
   */
  public function getMakerFee(): string
  {
    if (!isset($this->maker_fee)) {
      return "";
    }
    return $this->maker_fee;
  }

  /**
   * @param string $makerFee
   */
  public function setMakerFee(string $makerFee)
  {
    $this->maker_fee = $makerFee;
  }

  /**
   * @return string
   */
  public function getTakerFee(): string
  {
    if (!isset($this->taker_fee)) {
      return "";
    }
    return $this->taker_fee;
  }

  /**
   * @param string $takerFee
   */
  public function setTakerFee(string $takerFee)
  {
    $this->taker_fee = $takerFee;
  }

  /**
   * @return string
   */
  public function getThirtyDayVolume(): string
  {
    if (!isset($this->thirty_day_volume)) {
      return "";
    }
    return $this->thirty_day_volume;
  }

  /**
   * @param string $thirtyDayVolume
   */
  public function setThirtyDayVolume(string $thirtyDayVolume)
  {
    $this->thirty_day_volume = $thirtyDayVolume;
  }
}

// vi: ft=php
