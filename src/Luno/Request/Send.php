<?php declare(strict_types=1);

namespace Luno\Request;

class Send extends AbstractRequest
{
  /**
   * Amount to send as a decimal string.
   */
  protected $amount;

  /**
   * Currency to send.
   */
  protected $currency;

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
   * Description for the transaction to record on the account statement.
   */
  protected $description;

  /**
   * Message to send to the recipient. This is only relevant when sending to
   * an email address.
   */
  protected $message;

  /**
   * Optional unique ID to associate with this withdrawal. Useful to prevent
   * duplicate sends in case of failure. It supports all alphanumeric
   * characters, as well as "-" and "_".
   */
  protected $external_id;
  
  /**
   * @return float
   */
  public function getAmount(): float
  {
    if (!isset($this->amount)) {
      return 0;
    }
    return $this->amount;
  }

  /**
   * @param float $amount
   */
  public function setAmount(float $amount)
  {
    $this->amount = $amount;
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
  public function getAddress(): string
  {
    if (!isset($this->address)) {
      return "";
    }
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address)
  {
    $this->address = $address;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    if (!isset($this->description)) {
      return "";
    }
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  /**
   * @return string
   */
  public function getMessage(): string
  {
    if (!isset($this->message)) {
      return "";
    }
    return $this->message;
  }

  /**
   * @param string $message
   */
  public function setMessage(string $message)
  {
    $this->message = $message;
  }

  /**
   * @return string
   */
  public function getExternalId(): string
  {
    if (!isset($this->external_id)) {
      return "";
    }
    return $this->external_id;
  }

  /**
   * @param string $externalId
   */
  public function setExternalId(string $externalId)
  {
    $this->external_id = $externalId;
  }
}

// vi: ft=php
