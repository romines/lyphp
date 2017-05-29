<?php

// require_once __DIR__ . '/mymodule.php';

array_shift($argv);
$extant = array_filter($argv, 'file_exists');
array_map(function ($filename) {
  // echo ($filename);
  $file = new SplFileObject($filename);
  $info = new SplFileInfo($filename);
  echo $info->getFilename(), "\n";
}, $extant);

 ?>
