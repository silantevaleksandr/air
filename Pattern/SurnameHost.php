<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class SurnameHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([19]);
    $this->setTop([[],[97.0,211.8]]);
    $this->setValue($value);
    $this->cellOffset=[[],[4,4]];
  }
}
?>
