<?php
/**
*
*/
class DirectoryFilter
{

  public function filter($dir, $target_ext)
  {

    return array_filter(scandir($dir), function($file) use($target_ext) {
      return pathinfo($file, PATHINFO_EXTENSION) === $target_ext;
    });
  }
}

?>
