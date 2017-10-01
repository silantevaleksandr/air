<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class InfoLegalRepres extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([19,19]);
    $this->setRow(2);
    $this->setTop([[143.4]]);
    $this->setValue($value);
    $this->cellOffset=[[5,5]];
  }
}
?>
