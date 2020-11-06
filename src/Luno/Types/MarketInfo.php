<?php declare(strict_types=1);

namespace Luno\Types;

class MarketInfo
{
  /**
   * Base currency code
   */
  protected $base_currency;

  /**
   * Counter currency code
   */
  protected $counter_currency;

  /**
   * Fee decimal places
   */
  protected $fee_scale;

  /**
   * Unique identifier for the market
   */
  protected $market_id;

  /**
   * Maximum order price
   */
  protected $max_price;

  /**
   * Maximum order volume
   */
  protected $max_volume;

  /**
   * Minimum order price
   */
  protected $min_price;

  /**
   * Minimum order volume
   */
  protected $min_volume;

  /**
   * Price decimal places
   */
  protected $price_scale;

  /**
   * Current market trading status:<br>
   * <code>POST_ONLY</code> Trading is indefinitely suspended. This state is
   * commonly used when new markets are being launched to give traders enough
   * time to setup their orders before trading begins. When in this status,
   * orders can only be posted as post-only.<br>
   * <code>ACTIVE</code> Trading is fully enabled.<br>
   * <code>SUSPENDED</code> Trading has been temporarily suspended due to very
   * high volatility. When in this status, orders can only be posted as
   * post-only.<br>
   */
  protected $trading_status;

  /**
   * Volume decimal places
   */
  protected $volume_scale;
  
  /**
   * @return string
   */
  public function getBaseCurrency(): string
  {
    if (!isset($this->base_currency)) {
      return "";
    }
    return $this->base_currency;
  }

  /**
   * @param string $baseCurrency
   */
  public function setBaseCurrency(string $baseCurrency)
  {
    $this->base_currency = $baseCurrency;
  }

  /**
   * @return string
   */
  public function getCounterCurrency(): string
  {
    if (!isset($this->counter_currency)) {
      return "";
    }
    return $this->counter_currency;
  }

  /**
   * @param string $counterCurrency
   */
  public function setCounterCurrency(string $counterCurrency)
  {
    $this->counter_currency = $counterCurrency;
  }

  /**
   * @return int
   */
  public function getFeeScale(): int
  {
    if (!isset($this->fee_scale)) {
      return 0;
    }
    return $this->fee_scale;
  }

  /**
   * @param int $feeScale
   */
  public function setFeeScale(int $feeScale)
  {
    $this->fee_scale = $feeScale;
  }

  /**
   * @return string
   */
  public function getMarketId(): string
  {
    if (!isset($this->market_id)) {
      return "";
    }
    return $this->market_id;
  }

  /**
   * @param string $marketId
   */
  public function setMarketId(string $marketId)
  {
    $this->market_id = $marketId;
  }

  /**
   * @return float
   */
  public function getMaxPrice(): float
  {
    if (!isset($this->max_price)) {
      return 0;
    }
    return $this->max_price;
  }

  /**
   * @param float $maxPrice
   */
  public function setMaxPrice(float $maxPrice)
  {
    $this->max_price = $maxPrice;
  }

  /**
   * @return float
   */
  public function getMaxVolume(): float
  {
    if (!isset($this->max_volume)) {
      return 0;
    }
    return $this->max_volume;
  }

  /**
   * @param float $maxVolume
   */
  public function setMaxVolume(float $maxVolume)
  {
    $this->max_volume = $maxVolume;
  }

  /**
   * @return float
   */
  public function getMinPrice(): float
  {
    if (!isset($this->min_price)) {
      return 0;
    }
    return $this->min_price;
  }

  /**
   * @param float $minPrice
   */
  public function setMinPrice(float $minPrice)
  {
    $this->min_price = $minPrice;
  }

  /**
   * @return float
   */
  public function getMinVolume(): float
  {
    if (!isset($this->min_volume)) {
      return 0;
    }
    return $this->min_volume;
  }

  /**
   * @param float $minVolume
   */
  public function setMinVolume(float $minVolume)
  {
    $this->min_volume = $minVolume;
  }

  /**
   * @return int
   */
  public function getPriceScale(): int
  {
    if (!isset($this->price_scale)) {
      return 0;
    }
    return $this->price_scale;
  }

  /**
   * @param int $priceScale
   */
  public function setPriceScale(int $priceScale)
  {
    $this->price_scale = $priceScale;
  }

  /**
   * @return string
   */
  public function getTradingStatus(): string
  {
    if (!isset($this->trading_status)) {
      return "";
    }
    return $this->trading_status;
  }

  /**
   * @param string $tradingStatus
   */
  public function setTradingStatus(string $tradingStatus)
  {
    $this->trading_status = $tradingStatus;
  }

  /**
   * @return int
   */
  public function getVolumeScale(): int
  {
    if (!isset($this->volume_scale)) {
      return 0;
    }
    return $this->volume_scale;
  }

  /**
   * @param int $volumeScale
   */
  public function setVolumeScale(int $volumeScale)
  {
    $this->volume_scale = $volumeScale;
  }

}

// vi: ft=php
