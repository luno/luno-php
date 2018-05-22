<?php

namespace Luno\Response;

class GetWithdrawal extends AbstractResponse
{
  protected $amount;
  protected $created_at;
  protected $currency;
  protected $fee;
  protected $id;
  protected $status;
  protected $type;

  public function getAmount(): float {
    return $this->amount;
  }

  public function getCreatedAt(): integer {
    return $this->created_at;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function getFee(): float {
    return $this->fee;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getStatus(): string {
    return $this->status;
  }

  public function getType(): string {
    return $this->type;
  }

  public static function make($res): GetWithdrawal {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

