<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class InnHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([12]);
    $this->setTop([[],[176.9]]);
    $this->setValue($value);
    $this->cellOffset=[[],[3]];
  }
}
?>
