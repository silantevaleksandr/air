<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class StreetHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[],[139.8]]);
    $this->setValue($value);
    $this->cellOffset=[[],[4]];
  }
}
?>
