<?php

namespace App\Model;

class Dachshund implements IDog
{
  public function sound(): string
  {
    return 'woof! woof!';
  }

  public function hunt(): string
  {
    return 'run...';
  }
}
