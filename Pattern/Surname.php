<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Surname extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[48.6,199.1]]);
    $this->setValue($value);
    $this->cellOffset=[[4,4]];
  }
}
?>
