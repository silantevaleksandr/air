<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class StreetArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[253.4],[63.9]]);
    $this->setValue($value);
    $this->cellOffset=[[4],[4]];
  }
}
?>
