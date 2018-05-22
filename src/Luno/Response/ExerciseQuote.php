<?php

namespace Luno\Response;

class ExerciseQuote extends AbstractResponse
{
  protected $base_amount;
  protected $counter_amount;
  protected $created_at;
  protected $discarded;
  protected $exercised;
  protected $expires_at;
  protected $id;
  protected $pair;
  protected $type;

  public function getBaseAmount(): float {
    return $this->base_amount;
  }

  public function getCounterAmount(): float {
    return $this->counter_amount;
  }

  public function getCreatedAt(): integer {
    return $this->created_at;
  }

  public function getDiscarded(): boolean {
    return $this->discarded;
  }

  public function getExercised(): boolean {
    return $this->exercised;
  }

  public function getExpiresAt(): integer {
    return $this->expires_at;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getPair(): string {
    return $this->pair;
  }

  public function getType(): string {
    return $this->type;
  }

  public static function make($res): ExerciseQuote {
    // TODO: implement

    return null;
  }
}

// vi: ft=php

