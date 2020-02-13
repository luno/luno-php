<?php declare(strict_types=1);

namespace Luno\Types;

class AddressMeta
{
  protected $label;
  protected $value;
  
  /**
   * @return string
   */
  public function getLabel(): string
  {
    if (!isset($this->label)) {
      return "";
    }
    return $this->label;
  }

  /**
   * @param string $label
   */
  public function setLabel(string $label)
  {
    $this->label = $label;
  }

  /**
   * @return string
   */
  public function getValue(): string
  {
    if (!isset($this->value)) {
      return "";
    }
    return $this->value;
  }

  /**
   * @param string $value
   */
  public function setValue(string $value)
  {
    $this->value = $value;
  }

}

// vi: ft=php
