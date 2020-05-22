<?php 

spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
  $path = 'classes/';
  $extention = '.class.php';
  $fullpath = $path . $classname . $extention;

  if (!file_exists($fullpath)) {
    return false;
  }

  include_once $fullpath;
}

?>