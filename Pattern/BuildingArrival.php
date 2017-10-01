<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class BuildingArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([4]);
    $this->setTop([[259.8],[70.1]]);
    $this->setValue($value);
    $this->cellOffset=[[23],[23]];
  }
}
?>
