<?php

namespace Luno\Response;

use Luno\Types\AccountBalance;
use Luno\Types\AccountCapabilities;

class CreateAccount extends AbstractResponse
{
  protected $balance;
  protected $capabilities;
  protected $currency;
  protected $icon;
  protected $id;
  protected $is_default;
  protected $name;
  protected $pending;
  protected $receive_addresses;
  protected $transactions;
  
  /**
   * @return AccountBalance
   */
  public function getBalance(): AccountBalance
  {
    if (!isset($this->balance)) {
      return null;
    }
    return $this->balance;
  }

  /**
   * @param AccountBalance $balance
   */
  public function setBalance(AccountBalance $balance)
  {
    $this->balance = $balance;
  }

  /**
   * @return AccountCapabilities
   */
  public function getCapabilities(): AccountCapabilities
  {
    if (!isset($this->capabilities)) {
      return null;
    }
    return $this->capabilities;
  }

  /**
   * @param AccountCapabilities $capabilities
   */
  public function setCapabilities(AccountCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }

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
  public function getIcon(): string
  {
    if (!isset($this->icon)) {
      return "";
    }
    return $this->icon;
  }

  /**
   * @param string $icon
   */
  public function setIcon(string $icon)
  {
    $this->icon = $icon;
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    if (!isset($this->id)) {
      return "";
    }
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id)
  {
    $this->id = $id;
  }

  /**
   * @return bool
   */
  public function getIsDefault(): bool
  {
    if (!isset($this->is_default)) {
      return false;
    }
    return $this->is_default;
  }

  /**
   * @param bool $isDefault
   */
  public function setIsDefault(bool $isDefault)
  {
    $this->is_default = $isDefault;
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

  /**
   * @return \Luno\Types\Transaction[]
   */
  public function getPending(): array
  {
    if (!isset($this->pending)) {
      return [];
    }
    return $this->pending;
  }

  /**
   * @param \Luno\Types\Transaction[] $pending
   */
  public function setPending(array $pending)
  {
    $this->pending = $pending;
  }

  /**
   * @return \Luno\Types\ReceiveAddress[]
   */
  public function getReceiveAddresses(): array
  {
    if (!isset($this->receive_addresses)) {
      return [];
    }
    return $this->receive_addresses;
  }

  /**
   * @param \Luno\Types\ReceiveAddress[] $receiveAddresses
   */
  public function setReceiveAddresses(array $receiveAddresses)
  {
    $this->receive_addresses = $receiveAddresses;
  }

  /**
   * @return \Luno\Types\Transaction[]
   */
  public function getTransactions(): array
  {
    if (!isset($this->transactions)) {
      return [];
    }
    return $this->transactions;
  }

  /**
   * @param \Luno\Types\Transaction[] $transactions
   */
  public function setTransactions(array $transactions)
  {
    $this->transactions = $transactions;
  }
}

// vi: ft=php
