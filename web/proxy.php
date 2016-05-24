<?php

// Autoloading keeps being a requirement
$loader = include __DIR__ . "/../vendor/autoload.php";

// Load configuration
$config = include __DIR__ . "/../config/load.php"

// Kickstart services
$container = new \Pimple\Container();
array_map(function($filename) use ($container) {
  var_dump($filename);
}, glob(__DIR__ . "/../services/*.php"));

die();

array_map(function(\ServiceInterface) )
foreach($config['services'] as $service) {
  $container[$service->getName] = 
}
