<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class CityArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([33]);
    $this->setTop([[247.1],[57.8]]);
    $this->setValue($value);
    $this->cellOffset=[[6],[6]];
  }
}
?>
