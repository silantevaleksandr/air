<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class PhoneArrival extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([10]);
    $this->setTop([[],[81.6]]);
    $this->setValue($value);
    $this->cellOffset=[[],[4]];
  }
}
?>
