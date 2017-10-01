<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class VisaSN extends SeriesNumber
{

  function __construct($nPage,$value='')
  {
    $this->setTop([[105.3]]);
    $this->setNumPage($nPage);
    $this->cellOffset=[[25]];
    parent::__construct(0,5); //передаем в конструктор родителя смещение left : day,mouth,year
    $this->splitSN($value);
  }
}
?>
