<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class ValidityRF extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setTop([[111.8]]);
    $this->setNumPage($nPage);
    $this->cellOffset=[[21]];
    parent::__construct(0,4,7); //передаем в конструктор родителя смещение left : day,mouth,year
    $this->splitDate($value);
  }
}
?>
