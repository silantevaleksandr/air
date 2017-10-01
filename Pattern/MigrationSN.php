<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class MigrationSN extends SeriesNumber
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[137.0]]);
    $this->cellOffset=[[9]];
    parent::__construct(0,5); //передаем в конструктор родителя смещение left : day,mouth,year
    $this->splitSN($value);
  }
}
?>
