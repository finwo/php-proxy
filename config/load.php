<?php

use Spyc;

$spyc = new Spyc;
$config = array();
foreach(glob(__DIR__.'/*.yml') as $file) {
  $config = array_merge(
    $config,
    $spyc->YAMLLoad($file)
  );
}

return $config;
