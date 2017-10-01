<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class PassportHost extends Pattern
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([11]);
    $this->setTop([[],[109.4]]);
    $this->setValue($value);
    $this->cellOffset=[[],[12]];
  }
}
?>
