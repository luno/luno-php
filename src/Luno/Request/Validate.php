<?php declare(strict_types=1);

namespace Luno\Request;

class Validate extends AbstractRequest
{
  /**
   * Destination address or email address.
   * 
   * <b>Note</b>:
   * <ul>
   * <li>Ethereum addresses must be
   * <a href="https://github.com/ethereum/EIPs/blob/master/EIPS/eip-55.md" target="_blank" rel="nofollow">checksummed</a>.</li>
   * <li>Ethereum validations of email addresses are not supported.</li>
   * </ul>
   */
  protected $address;

  /**
   * Currency is the currency associated with the address.
   */
  protected $currency;

  /**
   * AddressName is the optional name under which to store the address as in the address book.
   */
  protected $address_name;

  /**
   * BeneficiaryName is the name of the beneficial owner if is it is a private address
   */
  protected $beneficiary_name;

  /**
   * Country is the ISO 3166-1 country code of the beneficial owner of the address
   */
  protected $country;

  /**
   * DateOfBirth is the date of birth of the (non-institutional) beneficial owner of the address in the form "YYYY-MM-DD"
   */
  protected $date_of_birth;

  /**
   * Optional XRP destination tag. Note that HasDestinationTag must be true if this value is provided.
   */
  protected $destination_tag;

  /**
   * Optional boolean flag indicating that a XRP destination tag is provided (even if zero).
   */
  protected $has_destination_tag;

  /**
   * InstitutionName is the name of the beneficial owner if is it is a legal entities address
   */
  protected $institution_name;

  /**
   * IsLegalEntity indicates if the address is for a legal entity and not a private beneficiary.
   * If this field is true then the fields BeneficiaryName, Nationality & DateOfBirth should be empty but the
   * fields InstitutionName and Country should be populated.
   * If this field is false and IsSelfSend is false (or empty) then the field InstitutionName should be empty but the
   * fields BeneficiaryName, Nationality & DateOfBirth and Country should be populated.
   */
  protected $is_legal_entity;

  /**
   * IsPrivateWallet indicates if the address is for private wallet and not held at an exchange.
   */
  protected $is_private_wallet;

  /**
   * IsSelfSend to indicate that the address belongs to the customer.
   * If this field is true then the remaining omitempty fields should not
   * be populated.
   */
  protected $is_self_send;

  /**
   * Nationality ISO 3166-1 country code of the nationality of the (non-institutional) beneficial owner of the address
   */
  protected $nationality;

  /**
   * PhysicalAddress is the legal physical address of the beneficial owner of the crypto address
   */
  protected $physical_address;

  /**
   * PrivateWalletName is the name of the private wallet
   */
  protected $wallet_name;
  
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
  public function getAddressName(): string
  {
    if (!isset($this->address_name)) {
      return "";
    }
    return $this->address_name;
  }

  /**
   * @param string $addressName
   */
  public function setAddressName(string $addressName)
  {
    $this->address_name = $addressName;
  }

  /**
   * @return string
   */
  public function getBeneficiaryName(): string
  {
    if (!isset($this->beneficiary_name)) {
      return "";
    }
    return $this->beneficiary_name;
  }

  /**
   * @param string $beneficiaryName
   */
  public function setBeneficiaryName(string $beneficiaryName)
  {
    $this->beneficiary_name = $beneficiaryName;
  }

  /**
   * @return string
   */
  public function getCountry(): string
  {
    if (!isset($this->country)) {
      return "";
    }
    return $this->country;
  }

  /**
   * @param string $country
   */
  public function setCountry(string $country)
  {
    $this->country = $country;
  }

  /**
   * @return string
   */
  public function getDateOfBirth(): string
  {
    if (!isset($this->date_of_birth)) {
      return "";
    }
    return $this->date_of_birth;
  }

  /**
   * @param string $dateOfBirth
   */
  public function setDateOfBirth(string $dateOfBirth)
  {
    $this->date_of_birth = $dateOfBirth;
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
  public function getInstitutionName(): string
  {
    if (!isset($this->institution_name)) {
      return "";
    }
    return $this->institution_name;
  }

  /**
   * @param string $institutionName
   */
  public function setInstitutionName(string $institutionName)
  {
    $this->institution_name = $institutionName;
  }

  /**
   * @return bool
   */
  public function getIsLegalEntity(): bool
  {
    if (!isset($this->is_legal_entity)) {
      return false;
    }
    return $this->is_legal_entity;
  }

  /**
   * @param bool $isLegalEntity
   */
  public function setIsLegalEntity(bool $isLegalEntity)
  {
    $this->is_legal_entity = $isLegalEntity;
  }

  /**
   * @return bool
   */
  public function getIsPrivateWallet(): bool
  {
    if (!isset($this->is_private_wallet)) {
      return false;
    }
    return $this->is_private_wallet;
  }

  /**
   * @param bool $isPrivateWallet
   */
  public function setIsPrivateWallet(bool $isPrivateWallet)
  {
    $this->is_private_wallet = $isPrivateWallet;
  }

  /**
   * @return bool
   */
  public function getIsSelfSend(): bool
  {
    if (!isset($this->is_self_send)) {
      return false;
    }
    return $this->is_self_send;
  }

  /**
   * @param bool $isSelfSend
   */
  public function setIsSelfSend(bool $isSelfSend)
  {
    $this->is_self_send = $isSelfSend;
  }

  /**
   * @return string
   */
  public function getNationality(): string
  {
    if (!isset($this->nationality)) {
      return "";
    }
    return $this->nationality;
  }

  /**
   * @param string $nationality
   */
  public function setNationality(string $nationality)
  {
    $this->nationality = $nationality;
  }

  /**
   * @return string
   */
  public function getPhysicalAddress(): string
  {
    if (!isset($this->physical_address)) {
      return "";
    }
    return $this->physical_address;
  }

  /**
   * @param string $physicalAddress
   */
  public function setPhysicalAddress(string $physicalAddress)
  {
    $this->physical_address = $physicalAddress;
  }

  /**
   * @return string
   */
  public function getWalletName(): string
  {
    if (!isset($this->wallet_name)) {
      return "";
    }
    return $this->wallet_name;
  }

  /**
   * @param string $walletName
   */
  public function setWalletName(string $walletName)
  {
    $this->wallet_name = $walletName;
  }
}

// vi: ft=php
