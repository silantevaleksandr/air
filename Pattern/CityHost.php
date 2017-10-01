<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class CityHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([33]);
    $this->setTop([[],[133.6]]);
    $this->setValue($value);
    $this->cellOffset=[[],[6]];
  }
}
?>
