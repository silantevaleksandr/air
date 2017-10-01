<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Nationality extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([34]);
    $this->setTop([[61.5,211.7]]);
    $this->setValue($value);
    $this->cellOffset=[[5,5]];
  }
}
?>
