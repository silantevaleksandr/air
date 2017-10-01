<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class NameOrgan extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([24,28]);
    $this->setRow(2);
    $this->setTop([[],[152.1]]);
    $this->setValue($value);
    $this->cellOffset=[[],[5,1]];
  }
}
?>
