<?php

namespace Luno\Request;

abstract class AbstractRequest
{
  public function serialize()
  {
    return get_object_vars($this);
  }
}
