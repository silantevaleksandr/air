<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class DateExitRF extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[130.9,271.9],[205.2]]);
    $this->cellOffset=[[28,9],[28]];
    parent::__construct(0,4,7);
    $this->splitDate($value);
  }
}
?>
