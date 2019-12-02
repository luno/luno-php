<?php declare(strict_types=1);

namespace Luno\Request;

class PostLimitOrder extends AbstractRequest
{
  /**
   * The currency pair to trade.
   */
  protected $pair;

  /**
   * <code>BID</code> for a bid (buy) limit order<br>
   * <code>ASK</code> for ab ask (sell) limit order
   */
  protected $type;

  /**
   * Post-only orders will be cancelled if they would otherwise have traded
   * immediately. For example, if there's a bid at ZAR 100,000 and you place
   * a post-only ask at ZAR 100,000, your order will be cancelled instead of
   * trading. If the best bid is ZAR 100,000 and you place a post-only ask at
   * ZAR 101,000, your order won't trade but will go into the order book.
   */
  protected $post_only;

  /**
   * Amount of Bitcoin or Ethereum to buy or sell as a decimal string in units
   * of the currency.
   */
  protected $volume;

  /**
   * Limit price as a decimal string in units of ZAR/BTC.
   */
  protected $price;

  /**
   * The base currency account to use in the trade.
   */
  protected $base_account_id;

  /**
   * The counter currency account to use in the trade.
   */
  protected $counter_account_id;
  
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
}

// vi: ft=php
