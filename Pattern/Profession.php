<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Profession extends Pattern
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setLength([23]);
    $this->setTop([[124.4]]);
    $this->setValue($value);
    $this->cellOffset=[[4]];
  }

}


?>
