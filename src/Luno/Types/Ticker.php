<?php

namespace Luno\Types;

class Ticker
{
  protected $ask;
  protected $bid;
  protected $last_trade;
  protected $pair;
  protected $rolling_24_hour_volume;
  protected $timestamp;

  public function getAsk(): float {
    return $this->ask;
  }

  public function getBid(): float {
    return $this->bid;
  }

  public function getLastTrade(): float {
    return $this->last_trade;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function getRolling24HourVolume(): float {
    return $this->rolling_24_hour_volume;
  }

  public function getTimestamp(): integer {
    return $this->timestamp;
  }
}

// vi: ft=php
