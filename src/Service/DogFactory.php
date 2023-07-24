<?php

namespace App\Service;

use App\Model\IDog;
use App\Model\Mops;
use App\Model\PlushLabrador;
use App\Model\RubberDachshund;
use App\Model\ShibaInu;
use App\Model\Dachshund;

class DogFactory
{
  protected $dogs = [
    'mops' => Mops::class,
    'dachshund' => Dachshund::class,
    'shibainu' => ShibaInu::class,
    'plushlabrador' => PlushLabrador::class,
    'rubberdachshund' => RubberDachshund::class,
  ];

  /**
   * @throws \Exception
   */
  public  function create($name) : IDog
  {
    if (!empty($this->dogs[$name])) {
       return new $this->dogs[$name]();
    }

    throw new \Exception('Name not found!');
  }
}
