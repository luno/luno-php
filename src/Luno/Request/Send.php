<?php

namespace Luno\Request;

class Send extends AbstractRequest
{
  /**
   * Destination Bitcoin address or email address, or Ethereum address to send
   * to.
   * 
   * Note:
   * <ul>
   * <li>Ethereum addresses must be
   * <a href="https://github.com/ethereum/EIPs/blob/master/EIPS/eip-55.md" target="_blank" rel="nofollow">checksummed</a>.</li>
   * <li>Ethereum sends to email addresses are not supported.</li>
   * </ul>
   */
  protected $address;

  /**
   * Amount to send as a decimal string.
   */
  protected $amount;

  /**
   * Currency to send.
   */
  protected $currency;

  /**
   * Description for the transaction to record on the account statement.
   */
  protected $description;

  /**
   * Message to send to the recipient. This is only relevant when sending to
   * an email address.
   */
  protected $message;

  public function getAddress(): string {
    return $this->address;
  }

  public function setAddress(string $address) {
    $this->address = $address;
  }

  public function getAmount(): float {
    return $this->amount;
  }

  public function setAmount(float $amount) {
    $this->amount = $amount;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function setCurrency(string $currency) {
    $this->currency = $currency;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function setDescription(string $description) {
    $this->description = $description;
  }

  public function getMessage(): string {
    return $this->message;
  }

  public function setMessage(string $message) {
    $this->message = $message;
  }
}

// vi: ft=php
