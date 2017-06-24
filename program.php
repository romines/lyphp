<?php

// require_once __DIR__ . '/mymodule.php';
// echo 'program.php . . .';
array_shift($argv);
// $extant = array_filter($argv, 'file_exists');
array_map(function ($filename) {
  // echo ($filename);
  try {
    $file = new SplFileObject($filename);
    $info = new SplFileInfo($filename);
    echo $info->getFilename(), "\n";
  } catch (RuntimeException $e) {
    echo "Unable to open file at path '", $filename, "'\n";
  }

}, $argv);


 ?>
