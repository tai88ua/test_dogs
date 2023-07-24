<?php

namespace App\Model;

class ShibaInu implements  IDog
{
  public function sound(): string
  {
    return 'woof! woof!';
  }

  public function hunt(): string
  {
    return 'I caught a duck';
  }
}
