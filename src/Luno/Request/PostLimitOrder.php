<?php declare(strict_types=1);

namespace Luno\Request;

class PostLimitOrder extends AbstractRequest
{
  /**
   * The currency pair to trade.
   */
  protected $pair;

  /**
   * Limit price as a decimal string in units of ZAR/BTC.
   */
  protected $price;

  /**
   * <code>BID</code> for a bid (buy) limit order<br>
   * <code>ASK</code> for an ask (sell) limit order
   */
  protected $type;

  /**
   * Amount of cryptocurrency to buy or sell as a decimal string in units of the currency.
   */
  protected $volume;

  /**
   * The base currency Account to use in the trade.
   */
  protected $base_account_id;

  /**
   * The counter currency Account to use in the trade.
   */
  protected $counter_account_id;

  /**
   * Post-only Orders will be cancelled if they would otherwise have traded
   * immediately.
   * For example, if there's a bid at ZAR 100,000 and you place a post-only ask at ZAR 100,000,
   * your order will be cancelled instead of trading.
   * If the best bid is ZAR 100,000 and you place a post-only ask at ZAR 101,000,
   * your order won't trade but will go into the order book.
   */
  protected $post_only;

  /**
   * Side of the trigger price to activate the order. This should be set if `stop_price` is also
   * set.
   * 
   * `RELATIVE_LAST_TRADE` will automatically infer the direction based on the last
   * trade price and the stop price. If last trade price is less than stop price then stop
   * direction is ABOVE otherwise is BELOW.
   */
  protected $stop_direction;

  /**
   * Trigger trade price to activate this order as a decimal string. If this
   * is set then this is treated as a Stop Limit Order and `stop_direction`
   * is expected to be set too.
   */
  protected $stop_price;
  
  /**
   * @return string
   */
  public function getPair(): string
  {
    if (!isset($this->pair)) {
      return "";
    }
    return $this->pair;
  }

  /**
   * @param string $pair
   */
  public function setPair(string $pair)
  {
    $this->pair = $pair;
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    if (!isset($this->price)) {
      return 0;
    }
    return $this->price;
  }

  /**
   * @param float $price
   */
  public function setPrice(float $price)
  {
    $this->price = $price;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

  /**
   * @return float
   */
  public function getVolume(): float
  {
    if (!isset($this->volume)) {
      return 0;
    }
    return $this->volume;
  }

  /**
   * @param float $volume
   */
  public function setVolume(float $volume)
  {
    $this->volume = $volume;
  }

  /**
   * @return int
   */
  public function getBaseAccountId(): int
  {
    if (!isset($this->base_account_id)) {
      return 0;
    }
    return $this->base_account_id;
  }

  /**
   * @param int $baseAccountId
   */
  public function setBaseAccountId(int $baseAccountId)
  {
    $this->base_account_id = $baseAccountId;
  }

  /**
   * @return int
   */
  public function getCounterAccountId(): int
  {
    if (!isset($this->counter_account_id)) {
      return 0;
    }
    return $this->counter_account_id;
  }

  /**
   * @param int $counterAccountId
   */
  public function setCounterAccountId(int $counterAccountId)
  {
    $this->counter_account_id = $counterAccountId;
  }

  /**
   * @return bool
   */
  public function getPostOnly(): bool
  {
    if (!isset($this->post_only)) {
      return false;
    }
    return $this->post_only;
  }

  /**
   * @param bool $postOnly
   */
  public function setPostOnly(bool $postOnly)
  {
    $this->post_only = $postOnly;
  }

  /**
   * @return string
   */
  public function getStopDirection(): string
  {
    if (!isset($this->stop_direction)) {
      return "";
    }
    return $this->stop_direction;
  }

  /**
   * @param string $stopDirection
   */
  public function setStopDirection(string $stopDirection)
  {
    $this->stop_direction = $stopDirection;
  }

  /**
   * @return float
   */
  public function getStopPrice(): float
  {
    if (!isset($this->stop_price)) {
      return 0;
    }
    return $this->stop_price;
  }

  /**
   * @param float $stopPrice
   */
  public function setStopPrice(float $stopPrice)
  {
    $this->stop_price = $stopPrice;
  }
}

// vi: ft=php
