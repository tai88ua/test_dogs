<?php

namespace App\Model;

interface IDog
{
  public function sound(): string;
  public function hunt(): string;
}