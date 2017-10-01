<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class HousingHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([4]);
    $this->setTop([[],[146.0]]);
    $this->setValue($value);
    $this->cellOffset=[[],[9]];
  }
}
?>
