<?php

namespace Luno\Response;

class ListPendingTransactions extends AbstractResponse
{
  protected $balance;
  protected $capabilities;
  protected $currency;
  protected $icon;
  protected $id;
  protected $is_default;
  protected $name;
  protected $pending;
  protected $receive_addresses;
  protected $transactions;

  public function getBalance(): AccountBalance {
    return $this->balance;
  }

  public function getCapabilities(): AccountCapabilities {
    return $this->capabilities;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function getIcon(): string {
    return $this->icon;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getIsDefault(): boolean {
    return $this->is_default;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getPending(): array /* Transaction */ {
    return $this->pending;
  }

  public function getReceiveAddresses(): array /* ReceiveAddress */ {
    return $this->receive_addresses;
  }

  public function getTransactions(): array /* Transaction */ {
    return $this->transactions;
  }

  public static function make($res): ListPendingTransactions {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

