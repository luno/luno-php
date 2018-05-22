<?php

namespace Luno\Types;

class OrderBookEntry
{
  protected $price;
  protected $volume;

  public function getPrice(): float {
    return $this->price;
  }

  public function getVolume(): float {
    return $this->volume;
  }
}

// vi: ft=php
