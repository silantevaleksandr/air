<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class PrevAddress extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([19,19,19]);
    $this->setRow(3);
    $this->setTop([[162.5]]);
    $this->setValue($value);
    $this->cellOffset=[[5,5,5]];
  }
}
?>
