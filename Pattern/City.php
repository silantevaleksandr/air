<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class City extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([33]);
    $this->setTop([[80.4]]);
    $this->setValue($value);
    $this->cellOffset=[[6]];
  }
}
?>
