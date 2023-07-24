<?php

namespace Test\Service;

use App\Model\Mops;
use PHPUnit\Framework\TestCase;

class DogFactoryTest extends TestCase
{

  public function testCreateTrue()
  {
    $factory = new \App\Service\DogFactory();
    $response = $factory->create('mops');
    $this->assertTrue(get_class($response) === Mops::class);
  }

  public function testCreateFalse()
  {
    $this->expectException(\Exception::class);
    $factory = new \App\Service\DogFactory();
    $factory->create('not found');
  }
}
