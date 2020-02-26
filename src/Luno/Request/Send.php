<?php declare(strict_types=1);

namespace Luno\Request;

class Send extends AbstractRequest
{
  /**
   * Destination address or email address.
   * 
   * <b>Note</b>:
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
   * User description for the transaction to record on the account statement.
   */
  protected $description;

  /**
   * Optional XRP destination tag. Note that HasDestinationTag must be true if this value is provided.
   */
  protected $destination_tag;

  /**
   * Optional unique ID to associate with this withdrawal.
   * Useful to prevent duplicate sends in case of failure.
   * This supports all alphanumeric characters, as well as "-" and "_".
   */
  protected $external_id;

  /**
   * Optional boolean flag indicating that a XRP destination tag is provided (even if zero).
   */
  protected $has_destination_tag;

  /**
   * Message to send to the recipient.
   * This is only relevant when sending to an email address.
   */
  protected $message;
  
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
   * @return int
   */
  public function getDestinationTag(): int
  {
    if (!isset($this->destination_tag)) {
      return 0;
    }
    return $this->destination_tag;
  }

  /**
   * @param int $destinationTag
   */
  public function setDestinationTag(int $destinationTag)
  {
    $this->destination_tag = $destinationTag;
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

  /**
   * @return bool
   */
  public function getHasDestinationTag(): bool
  {
    if (!isset($this->has_destination_tag)) {
      return false;
    }
    return $this->has_destination_tag;
  }

  /**
   * @param bool $hasDestinationTag
   */
  public function setHasDestinationTag(bool $hasDestinationTag)
  {
    $this->has_destination_tag = $hasDestinationTag;
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
}

// vi: ft=php
