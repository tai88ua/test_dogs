<?php

include_once __DIR__ . '/vendor/autoload.php';

$name = '';
$action = '';

if (!empty($argv[1])) {
  $name = strtolower($argv[1]);
}

if (!empty($argv[2])) {
  $action = strtolower($argv[2]);
}

$factory = new \App\Service\DogFactory();
$controller = new \App\Controller($factory);
$answear = '';

try
{
  if ($action == 'sound') {
    $answear =  $controller->sound($name);
  } elseif ($action == 'hunt') {
    $answear = $controller->hunt($name);
  } else {
    throw new \Exception('Bad action!');
  }
}
catch (Exception $e)
{
  $answear = 'Error: ' . $e->getMessage();
}


echo $answear, "\n";
