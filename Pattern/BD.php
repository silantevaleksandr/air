<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class BD extends Date
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[67.8,217.9]]);
    $this->cellOffset=[[6,6]];
    parent::__construct(0,4,7); //6,10,13
    $this->splitDate($value);
  }

}
?>
