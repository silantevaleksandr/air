<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Validity extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[93.0]]);
    $this->cellOffset=[[21]];
    parent::__construct(0,4,7); //передаем в конструктор родителя смещение left : day,mouth,year
    $this->splitDate($value);
  }
}
?>
