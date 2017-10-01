<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class NameHost extends Pattern
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([33]);
    $this->setTop([[],[103.2,218.1]]);
    $this->setValue($value);
    $this->cellOffset=[[],[4,4]];
  }
}
?>
