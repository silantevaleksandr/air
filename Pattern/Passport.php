<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Passport extends Pattern
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([11]);
    $this->setTop([[86.9,224.2]]);
    $this->setValue($value);
    $this->cellOffset=[[12,12]];
  }
}
?>
