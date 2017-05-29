<?php

require_once __DIR__ . '/mymodule.php';

$dir = $argv[1];
$ext = $argv[2];

$filtered = (new DirectoryFilter())->filter($dir, $ext);

array_map(function ($filename) {
  echo $filename, "\n";
}, $filtered);

 ?>
