<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class PassportSN extends SeriesNumber
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[86.9,224.2]]);
    $this->cellOffset=[[25,25]];
    parent::__construct(0,5); //передаем в конструктор родителя смещение left : day,mouth,year
    $this->splitSN($value);
  }

}
?>
