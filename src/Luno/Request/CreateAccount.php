<?php declare(strict_types=1);

namespace Luno\Request;

class CreateAccount extends AbstractRequest
{
  /**
   * The currency code for the Account you want to create.  Please see the Currency section for a detailed list of currencies supported by the Luno platform.
   * 
   * Users must be verified to trade currency in order to be able to create an Account.  For more information on the verification process, please see <a href="/help/en/articles/1000168396">How do I verify my identity?</a>.
   * 
   * Users have a limit of 4 accounts per currency.
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
