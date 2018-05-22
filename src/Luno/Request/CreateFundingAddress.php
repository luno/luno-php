<?php

namespace Luno\Request;

class CreateFundingAddress extends AbstractRequest
{
  /**
   * Currency code of the asset.
   */
  protected $asset;

  /**
   * An optional name for the new address
   */
  protected $name;

  public function getAsset(): string {
    return $this->asset;
  }

  public function setAsset(string $asset) {
    $this->asset = $asset;
  }

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name) {
    $this->name = $name;
  }
}

// vi: ft=php
