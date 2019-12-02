<?php declare(strict_types=1);

namespace Luno\Request;

class GetFundingAddress extends AbstractRequest
{
  /**
   * Currency code of the asset.
   */
  protected $asset;

  /**
   * Specific cryptocurrency address to retrieve. If not provided, the
   * default address will be used.
   */
  protected $address;
  
  /**
   * @return string
   */
  public function getAsset(): string
  {
    if (!isset($this->asset)) {
      return "";
    }
    return $this->asset;
  }

  /**
   * @param string $asset
   */
  public function setAsset(string $asset)
  {
    $this->asset = $asset;
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
}

// vi: ft=php
