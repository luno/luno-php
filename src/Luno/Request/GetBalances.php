<?php

namespace Luno\Request;

class GetBalances extends AbstractRequest
{
  /**
   * Only return balances for wallets with these currencies (if not provided,
   * all balances will be returned)
   */
  protected $assets;

  public function getAssets(): array /* string */ {
    return $this->assets;
  }

  public function setAssets(array /* string */ $assets) {
    $this->assets = $assets;
  }
}

// vi: ft=php
