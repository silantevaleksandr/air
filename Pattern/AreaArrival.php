<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class AreaArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[240.7],[51.6]]);
    $this->setValue($value);
    $this->cellOffset=[[4],[4]];
  }
}
?>
