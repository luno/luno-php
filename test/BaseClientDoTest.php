<?php

namespace Luno\Test;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
  
use Luno;

class BaseClientDoTest extends \PHPUnit\Framework\TestCase
{
  protected $method;

  protected $client;

  protected function setUp(): void
  {
     $class = new \ReflectionClass('Luno\Test\BaseClient');
     $this->method = $class->getMethod('do');
     $this->method->setAccessible(true);

     $this->client = new BaseClient();
  }

  public function testDoBasic()
  {
     $mock = new MockHandler([
       new Response(200, [], '{"key":"value"}'),
     ]);
     $handler = HandlerStack::create($mock);
     $this->client->setClient(new HttpClient(['handler' => $handler]));

     $req = new Luno\Request\GetOrderBook;
     $res = $this->method->invokeArgs($this->client, ['GET', '/', $req, false]);
     $this->assertEquals('value', $res->key);
  }

  public function testDoNon200()
  {
     $mock = new MockHandler([
       new Response(400, [], ''),
     ]);
     $handler = HandlerStack::create($mock);
     $this->client->setClient(new HttpClient(['handler' => $handler]));

     $this->expectException(ClientException::class);
     $req = new Luno\Request\GetOrderBook;
     $this->method->invokeArgs($this->client, ['GET', '/', $req, false]);
  }

  public function testDoNon200APIError()
  {
     $mock = new MockHandler([
       new Response(400, [], '{"error_code":"ErrSomething","error":"Message"}'),
     ]);
     $handler = HandlerStack::create($mock);
     $this->client->setClient(new HttpClient(['handler' => $handler]));

     $this->expectException(Luno\Error::class);
     $req = new Luno\Request\GetOrderBook;
     $this->method->invokeArgs($this->client, ['GET', '/', $req, false]);
  }
}
