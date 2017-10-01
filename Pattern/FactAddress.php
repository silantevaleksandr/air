<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class FactAddress extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([24,28]);
    $this->setRow(2);
    $this->setTop([[],[164.5]]);
    $this->setValue($value);
    $this->cellOffset=[[],[5,1]];
  }
}
?>
