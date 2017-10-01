<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class RoomArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([4]);
    $this->setTop([[259.8],[70.1]]);
    $this->setValue($value);
    $this->cellOffset=[[34],[34]];
  }
}
?>
