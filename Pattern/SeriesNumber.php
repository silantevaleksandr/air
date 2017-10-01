<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class SeriesNumber extends Pattern
{
    protected $series;
    protected $number;
    private $del=' ';

  function __construct($pSeries, $pNumber)
  {
    $this->series= new Series();
    $this->number= new Number();
    $nPage=$this->getNumPage();
    $this->series->cellOffset[$nPage] = [];
    $this->number->cellOffset[$nPage] = [];
    for ($i=0;$i<count($this->cellOffset[$nPage]);$i++) {
      $curOffset=$this->cellOffset[$nPage][$i];
      array_push($this->series->cellOffset[$nPage],($curOffset+$pSeries));
      array_push($this->number->cellOffset[$nPage],($curOffset+$pNumber));
    }
  }
  public function setDelimiter($newDel){
    $this->del=$newDel;
  }
  public function getDelimiter(){
    return $this->del;
  }
  public function splitSN($value){
    $arrSN=explode($this->getDelimiter(),$value);
    $this->series->setValue($arrSN[0]);
    $this->number->setValue($arrSN[1]);
  }
  public function renderRow($pdf,$sym=NULL){
    $nPage=$this->getNumPage();
    $offsetSeries=$this->series->cellOffset[$nPage];
    $offsetNumber=$this->number->cellOffset[$nPage];
    for ($i=0;$i<count($this->getTop()[$nPage]);$i++) {
      $curTop=$this->getTop()[$nPage][$i];
      $this->series->setTop([$nPage=>[$curTop]]);
      $this->number->setTop([$nPage=>[$curTop]]);
      $this->series->setNumPage($nPage);
      $this->number->setNumPage($nPage);
      $this->series->cellOffset[$nPage]=[$offsetSeries[$i]];
      $this->number->cellOffset[$nPage]=[$offsetNumber[$i]];
      $pdf=$this->series->renderRow($pdf);
      $pdf=$this->number->renderRow($pdf);
  }
    return $pdf;
  }
}

class Series extends Pattern
{

  function __construct()
  {
    $this->setLength([4]);
  }
}

class Number extends Pattern
{

  function __construct()
  {
    $this->setLength([9]);
  }
}

?>
