<?php

namespace Luno\Request;

class GetFundingAddress extends AbstractRequest
{
  /**
   * Currency code of the asset.
   */
  protected $asset;

  /**
   * Specific Bitcoin or Ethereum address to retrieve. If not provided, the
   * default address will be used.
   */
  protected $address;

  public function getAsset(): string {
    return $this->asset;
  }

  public function setAsset(string $asset) {
    $this->asset = $asset;
  }

  public function getAddress(): string {
    return $this->address;
  }

  public function setAddress(string $address) {
    $this->address = $address;
  }
}

// vi: ft=php
