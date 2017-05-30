<?php
function autoload($classname)
{
  if (file_exists($file = __DIR__ . '/modeles/' . $classname . '.php'))
  {
    require $file;
  }
}

spl_autoload_register('autoload');