<?php

namespace Luno\Test;

use Luno\Response\GetOrderBook;

class MapperTest extends \PHPUnit\Framework\TestCase
{
  public function testMapperOrderBook()
  {
    $res = (object)[
      "asks" => [
        (object)[
          "volume" => "10",
          "price" => "900"
        ],
        (object)[
          "volume" => "abc",
          "price" => "100"
        ],
        (object)[]
      ]
    ];
    $mapper = new \JsonMapper();
    $out = $mapper->map($res, new GetOrderBook);
    $this->assertEquals(count($out->getBids()), 0);
    $this->assertEquals(count($out->getAsks()), 3);
    $this->assertEquals(10, $out->getAsks()[0]->getVolume());
    $this->assertEquals(0, $out->getAsks()[1]->getVolume());
    $this->assertEquals(0, $out->getAsks()[2]->getVolume());
  }
}
