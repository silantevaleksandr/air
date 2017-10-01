<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class RegionArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([33]);
    $this->setTop([[234.3],[45.3]]);
    $this->setValue($value);
    $this->cellOffset=[[6],[6]];
  }
}
?>
