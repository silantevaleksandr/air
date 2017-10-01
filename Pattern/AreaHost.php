<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class AreaHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[],[127.5]]);
    $this->setValue($value);
    $this->cellOffset=[[],[4]];
  }
}
?>
