<?php

namespace Luno\Request;

class GetBalances extends AbstractRequest
{
  /**
   * Only return balances for wallets with these currencies (if not provided,
   * all balances will be returned)
   */
  protected $assets;
  
  /**
   * @return \Luno\Types\string[]
   */
  public function getAssets(): array
  {
    if (!isset($this->assets)) {
      return [];
    }
    return $this->assets;
  }

  /**
   * @param \Luno\Types\string[] $assets
   */
  public function setAssets(array $assets)
  {
    $this->assets = $assets;
  }
}

// vi: ft=php
