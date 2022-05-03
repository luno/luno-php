<?php declare(strict_types=1);

namespace Luno\Types;

class beneficiary
{
  protected $bank_account_branch;
  protected $bank_account_number;
  protected $bank_account_type;
  protected $bank_country;
  protected $bank_name;
  protected $bank_recipient;
  protected $created_at;
  protected $id;
  protected $supports_fast_withdrawals;
  
  /**
   * @return string
   */
  public function getBankAccountBranch(): string
  {
    if (!isset($this->bank_account_branch)) {
      return "";
    }
    return $this->bank_account_branch;
  }

  /**
   * @param string $bankAccountBranch
   */
  public function setBankAccountBranch(string $bankAccountBranch)
  {
    $this->bank_account_branch = $bankAccountBranch;
  }

  /**
   * @return string
   */
  public function getBankAccountNumber(): string
  {
    if (!isset($this->bank_account_number)) {
      return "";
    }
    return $this->bank_account_number;
  }

  /**
   * @param string $bankAccountNumber
   */
  public function setBankAccountNumber(string $bankAccountNumber)
  {
    $this->bank_account_number = $bankAccountNumber;
  }

  /**
   * @return string
   */
  public function getBankAccountType(): string
  {
    if (!isset($this->bank_account_type)) {
      return "";
    }
    return $this->bank_account_type;
  }

  /**
   * @param string $bankAccountType
   */
  public function setBankAccountType(string $bankAccountType)
  {
    $this->bank_account_type = $bankAccountType;
  }

  /**
   * @return string
   */
  public function getBankCountry(): string
  {
    if (!isset($this->bank_country)) {
      return "";
    }
    return $this->bank_country;
  }

  /**
   * @param string $bankCountry
   */
  public function setBankCountry(string $bankCountry)
  {
    $this->bank_country = $bankCountry;
  }

  /**
   * @return string
   */
  public function getBankName(): string
  {
    if (!isset($this->bank_name)) {
      return "";
    }
    return $this->bank_name;
  }

  /**
   * @param string $bankName
   */
  public function setBankName(string $bankName)
  {
    $this->bank_name = $bankName;
  }

  /**
   * @return string
   */
  public function getBankRecipient(): string
  {
    if (!isset($this->bank_recipient)) {
      return "";
    }
    return $this->bank_recipient;
  }

  /**
   * @param string $bankRecipient
   */
  public function setBankRecipient(string $bankRecipient)
  {
    $this->bank_recipient = $bankRecipient;
  }

  /**
   * @return int
   */
  public function getCreatedAt(): int
  {
    if (!isset($this->created_at)) {
      return 0;
    }
    return $this->created_at;
  }

  /**
   * @param int $createdAt
   */
  public function setCreatedAt(int $createdAt)
  {
    $this->created_at = $createdAt;
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
  public function getSupportsFastWithdrawals(): bool
  {
    if (!isset($this->supports_fast_withdrawals)) {
      return false;
    }
    return $this->supports_fast_withdrawals;
  }

  /**
   * @param bool $supportsFastWithdrawals
   */
  public function setSupportsFastWithdrawals(bool $supportsFastWithdrawals)
  {
    $this->supports_fast_withdrawals = $supportsFastWithdrawals;
  }

}

// vi: ft=php
