<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Name extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([35]);
    $this->setTop([[55.1,205.4]]);
    $this->setValue($value);
    $this->cellOffset=[[4,4]];
  }
}
?>
