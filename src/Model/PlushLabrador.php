<?php

namespace App\Model;

class PlushLabrador implements IDog
{

  public function sound(): string
  {
    return  ' ... , ..';
  }

  public function hunt(): string
  {
    return 'i can\'t hunt! I am plush';
  }

}
