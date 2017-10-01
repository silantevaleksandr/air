<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class ValidityHost extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[],[115.6]]);
    $this->cellOffset=[[],[21]];
    parent::__construct(0,4,7); //6,10,13
    $this->splitDate($value);
  }
}
?>
