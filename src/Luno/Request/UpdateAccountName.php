<?php declare(strict_types=1);

namespace Luno\Request;

class UpdateAccountName extends AbstractRequest
{
  /**
   * Account ID - the unique identifier for the specific Account.
   */
  protected $id;

  /**
   * The label to use for this account
   */
  protected $name;
  
  /**
   * @return int
   */
  public function getId(): int
  {
    if (!isset($this->id)) {
      return 0;
    }
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id)
  {
    $this->id = $id;
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
