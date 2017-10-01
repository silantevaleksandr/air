<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class DateEntryRF extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[130.9]]);
    $this->cellOffset=[[7]];
    parent::__construct(0,4,7);
    $this->splitDate($value);
  }
 }
?>
