<?php declare(strict_types=1);

namespace Luno;

/**
 * Error is a Luno API error.
 */
class Error extends \RuntimeException
{
  protected $lunoCode;

  protected $lunoMessage;

  public function __construct(string $lunoCode, string $lunoMessage)
  {
    parent::__construct($lunoMessage, 0);

    $this->lunoCode = $lunoCode;
    $this->lunoMessage = $lunoMessage;
  }

  /**
   * getLunoCode returns a code which can be used to identify errors even when
   * the error message is localised.
   */
  public function getLunoCode()
  {
    return $this->lunoCode;
  }

  /**
   * getLunoMessage returns a message which may be localised for authenticated
   * API calls.
   */
  public function getLunoMessage()
  {
    return $this->lunoMessage;
  }
}
