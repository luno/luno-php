<?php

namespace Luno\Response;

class GetFeeInfo extends AbstractResponse
{
  protected $maker_fee;
  protected $taker_fee;
  protected $thirty_day_volume;

  public function getMakerFee(): string {
    return $this->maker_fee;
  }

  public function getTakerFee(): string {
    return $this->taker_fee;
  }

  public function getThirtyDayVolume(): string {
    return $this->thirty_day_volume;
  }

  public static function make($res): GetFeeInfo {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

