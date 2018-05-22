<?php

namespace Luno\Request;

class CreateAccount extends AbstractRequest
{
  /**
   * The currency code for the account you want to create
   * 
   * You must be verified to trade currency in order to be able to create an
   * account. A user has a limit of 4 accounts per currency.
   */
  protected $currency;

  /**
   * The label to use for this account
   */
  protected $name;

  public function getCurrency(): string {
    return $this->currency;
  }

  public function setCurrency(string $currency) {
    $this->currency = $currency;
  }

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name) {
    $this->name = $name;
  }
}

// vi: ft=php
