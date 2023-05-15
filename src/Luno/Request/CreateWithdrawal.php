<?php declare(strict_types=1);

namespace Luno\Request;

class CreateWithdrawal extends AbstractRequest
{
  /**
   * Amount to withdraw. The currency withdrawn depends on the type setting.
   */
  protected $amount;

  /**
   * Withdrawal method.
   */
  protected $type;

  /**
   * The beneficiary ID of the bank account the withdrawal will be paid out to.
   * This parameter is required if the user has set up multiple beneficiaries.
   * The beneficiary ID can be found by selecting on the beneficiary name on the user’s <a href="/wallet/beneficiaries">Beneficiaries</a> page.
   */
  protected $beneficiary_id;

  /**
   * Optional unique ID to associate with this withdrawal.
   * Useful to prevent duplicate sends.
   * This field supports all alphanumeric characters including "-" and "_".
   */
  protected $external_id;

  /**
   * If true, it will be a fast withdrawal if possible. Fast withdrawals come with a fee.
   * Currently fast withdrawals are only available for `type=ZAR_EFT`; for other types, an error is returned.
   * Fast withdrawals are not possible for Bank of Baroda, Deutsche Bank, Merrill Lynch South Africa, UBS, Postbank and Tyme Bank.
   * The fee to be charged is the same as when withdrawing from the UI.
   */
  protected $fast;

  /**
   * For internal use.
   * Deprecated: We don't allow custom references and will remove this soon.
   */
  protected $reference;
  
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
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

  /**
   * @return int
   */
  public function getBeneficiaryId(): int
  {
    if (!isset($this->beneficiary_id)) {
      return 0;
    }
    return $this->beneficiary_id;
  }

  /**
   * @param int $beneficiaryId
   */
  public function setBeneficiaryId(int $beneficiaryId)
  {
    $this->beneficiary_id = $beneficiaryId;
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
  public function getFast(): bool
  {
    if (!isset($this->fast)) {
      return false;
    }
    return $this->fast;
  }

  /**
   * @param bool $fast
   */
  public function setFast(bool $fast)
  {
    $this->fast = $fast;
  }

  /**
   * @return string
   */
  public function getReference(): string
  {
    if (!isset($this->reference)) {
      return "";
    }
    return $this->reference;
  }

  /**
   * @param string $reference
   */
  public function setReference(string $reference)
  {
    $this->reference = $reference;
  }
}

// vi: ft=php
