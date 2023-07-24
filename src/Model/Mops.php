<?php

namespace App\Model;

class Mops implements IDog
{
  public function sound(): string
  {
    return 'woof! woof!';
  }

  public function hunt(): string
  {
    return '';
  }
}
