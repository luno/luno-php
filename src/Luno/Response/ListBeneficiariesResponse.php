<?php declare(strict_types=1);

namespace Luno\Response;

class ListBeneficiariesResponse extends AbstractResponse
{
  protected $beneficiaries;
  
  /**
   * @return \Luno\Types\beneficiary[]
   */
  public function getBeneficiaries(): array
  {
    if (!isset($this->beneficiaries)) {
      return [];
    }
    return $this->beneficiaries;
  }

  /**
   * @param \Luno\Types\beneficiary[] $beneficiaries
   */
  public function setBeneficiaries(array $beneficiaries)
  {
    $this->beneficiaries = $beneficiaries;
  }
}

// vi: ft=php
