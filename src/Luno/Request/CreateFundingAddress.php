<?php declare(strict_types=1);

namespace Luno\Request;

class CreateFundingAddress extends AbstractRequest
{
  /**
   * Currency code of the asset.
   */
  protected $asset;

  /**
   * An optional name for the new Receive Address
   */
  protected $name;
  
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
  public function getName(): string
  {
    if (!isset($this->name)) {
      return "";
    }
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }
}

// vi: ft=php
