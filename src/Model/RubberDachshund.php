<?php

namespace App\Model;

class RubberDachshund implements  IDog
{

  public function sound(): string
  {
    return 'pi pi pi';
  }

  public function hunt(): string
  {
    return 'You must throw me in the target!';
  }
}