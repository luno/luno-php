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
  
  /**
   * @return string
   */
  public function getCurrency(): string
  {
    if (!isset($this->currency)) {
      return "";
    }
    return $this->currency;
  }

  /**
   * @param string $currency
   */
  public function setCurrency(string $currency)
  {
    $this->currency = $currency;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    if (!isset($this->name)) {
      return "";
    }
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }
}

// vi: ft=php
