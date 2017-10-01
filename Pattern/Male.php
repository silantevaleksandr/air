<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Male extends Pattern
{
  function __construct()
  {
    $this->setLength([1]);
  }
}
?>
