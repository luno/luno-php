<?php

namespace Luno\Test;

use Luno;

class BaseClientTest extends \PHPUnit\Framework\TestCase
{
  public function testSetAuthGoodValues()
  {
    $client = new Luno\BaseClient();

    $client->setAuth('api_key', 'api_secret');
    $this->addToAssertionCount(1);
  }

  public function testSetAuthEmptyValues()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setAuth('', '');
  }

  public function testSetAuthSomeValues()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setAuth('api_key', '');
  }

  public function testSetAuthSomeValues2()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setAuth('', 'api_secret');
  }

  public function testSetBaseURLGoodValue()
  {
    $client = new Luno\BaseClient();

    $client->setBaseURL('http://api.mybitx.com/');
    $this->addToAssertionCount(1);
  }

  public function testSetBaseURLEmptyValue()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setBaseURL('');
  }

  public function testSetBaseURLBadValue()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setBaseURL('invalid_url');
  }

  public function testSetBaseURLBadValue2()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setBaseURL('api.mybitx.com');
  }

  public function testSetTimeoutGoodValue()
  {
    $client = new Luno\BaseClient();

    $client->setTimeout(1);
    $this->addToAssertionCount(1);
  }

  public function testSetTimeoutBadValue()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setTimeout(0);
  }

  public function setClientBadValue()
  {
    $client = new Luno\BaseClient();

    $this->expectException(\InvalidArgumentException::class);
    $client->setClient(null);
  }
}

