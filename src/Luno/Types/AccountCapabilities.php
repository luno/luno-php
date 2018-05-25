<?php declare(strict_types=1);

namespace Luno\Types;

class AccountCapabilities
{
  protected $can_buy;
  protected $can_deposit;
  protected $can_receive;
  protected $can_sell;
  protected $can_send;
  protected $can_social_send;
  protected $can_withdraw;
  
  /**
   * @return bool
   */
  public function getCanBuy(): bool
  {
    if (!isset($this->can_buy)) {
      return false;
    }
    return $this->can_buy;
  }

  /**
   * @param bool $canBuy
   */
  public function setCanBuy(bool $canBuy)
  {
    $this->can_buy = $canBuy;
  }

  /**
   * @return bool
   */
  public function getCanDeposit(): bool
  {
    if (!isset($this->can_deposit)) {
      return false;
    }
    return $this->can_deposit;
  }

  /**
   * @param bool $canDeposit
   */
  public function setCanDeposit(bool $canDeposit)
  {
    $this->can_deposit = $canDeposit;
  }

  /**
   * @return bool
   */
  public function getCanReceive(): bool
  {
    if (!isset($this->can_receive)) {
      return false;
    }
    return $this->can_receive;
  }

  /**
   * @param bool $canReceive
   */
  public function setCanReceive(bool $canReceive)
  {
    $this->can_receive = $canReceive;
  }

  /**
   * @return bool
   */
  public function getCanSell(): bool
  {
    if (!isset($this->can_sell)) {
      return false;
    }
    return $this->can_sell;
  }

  /**
   * @param bool $canSell
   */
  public function setCanSell(bool $canSell)
  {
    $this->can_sell = $canSell;
  }

  /**
   * @return bool
   */
  public function getCanSend(): bool
  {
    if (!isset($this->can_send)) {
      return false;
    }
    return $this->can_send;
  }

  /**
   * @param bool $canSend
   */
  public function setCanSend(bool $canSend)
  {
    $this->can_send = $canSend;
  }

  /**
   * @return bool
   */
  public function getCanSocialSend(): bool
  {
    if (!isset($this->can_social_send)) {
      return false;
    }
    return $this->can_social_send;
  }

  /**
   * @param bool $canSocialSend
   */
  public function setCanSocialSend(bool $canSocialSend)
  {
    $this->can_social_send = $canSocialSend;
  }

  /**
   * @return bool
   */
  public function getCanWithdraw(): bool
  {
    if (!isset($this->can_withdraw)) {
      return false;
    }
    return $this->can_withdraw;
  }

  /**
   * @param bool $canWithdraw
   */
  public function setCanWithdraw(bool $canWithdraw)
  {
    $this->can_withdraw = $canWithdraw;
  }

}

// vi: ft=php
