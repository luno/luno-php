<?php

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

  public function getCanBuy(): boolean {
    return $this->can_buy;
  }

  public function getCanDeposit(): boolean {
    return $this->can_deposit;
  }

  public function getCanReceive(): boolean {
    return $this->can_receive;
  }

  public function getCanSell(): boolean {
    return $this->can_sell;
  }

  public function getCanSend(): boolean {
    return $this->can_send;
  }

  public function getCanSocialSend(): boolean {
    return $this->can_social_send;
  }

  public function getCanWithdraw(): boolean {
    return $this->can_withdraw;
  }
}

// vi: ft=php
