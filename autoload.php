<?php
function autoload($classname)
{
  if (file_exists($file = __DIR__ . '/modeles/' . $classname . '.php')){
    require $file;
  }
  elseif(file_exists($file = __DIR__ . '/router/' . $classname . '.php')){
    require $file;
  }
  elseif(file_exists($file = __DIR__ . '/controleurs/' . $classname . '.php')) {
  	require $file;
  }
}

spl_autoload_register('autoload');