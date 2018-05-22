<?php

namespace Luno\Request;

class CreateWithdrawal extends AbstractRequest
{
  /**
   * Amount to withdraw. The currency depends on the type.
   */
  protected $amount;

  /**
   * Withdrawal type.
   */
  protected $type;

  /**
   * The beneficiary ID of the bank account the withdrawal will be paid out
   * to. This parameter is required if you have multiple bank accounts. Your
   * bank account beneficiary ID can be found by clicking on the beneficiary
   * name on the <a href="/wallet/beneficiaries">Beneficiaries</a> page.
   */
  protected $beneficiary_id;

  /**
   * For internal use.
   */
  protected $reference;

  public function getAmount(): float {
    return $this->amount;
  }

  public function setAmount(float $amount) {
    $this->amount = $amount;
  }

  public function getType(): string {
    return $this->type;
  }

  public function setType(string $type) {
    $this->type = $type;
  }

  public function getBeneficiaryId(): integer {
    return $this->beneficiary_id;
  }

  public function setBeneficiaryId(integer $beneficiaryId) {
    $this->beneficiary_id = $beneficiaryId;
  }

  public function getReference(): string {
    return $this->reference;
  }

  public function setReference(string $reference) {
    $this->reference = $reference;
  }
}

// vi: ft=php
