<?php

namespace App;

use App\Service\DogFactory;

class Controller
{
  /** @var DogFactory  */
  protected $factory;

  public function __construct(DogFactory $factory)
  {
    $this->factory = $factory;
  }

  /**
   * @throws \Exception
   */
  public function sound($name): string
  {
    return $this->factory->create($name)->sound();
  }

  /**
   * @throws \Exception
   */
  public function hunt($name): string
  {
    return $this->factory->create($name)->hunt();
  }

}
