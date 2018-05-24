<?php declare(strict_types=1);

namespace Luno\Request;

abstract class AbstractRequest
{
  public function serialize()
  {
    return get_object_vars($this);
  }
}
