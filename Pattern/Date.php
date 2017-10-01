<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Date extends Pattern
{
    protected $day;
    protected $mouth;
    protected $year;
    private $del='.';

  function __construct($pDay, $pMouth, $pYear)
  {
    $this->day= new Day();
    $this->mouth= new Mouth();
    $this->year= new Year();
    $nPage=$this->getNumPage();
    $this->day->cellOffset[$nPage] = [];
    $this->mouth->cellOffset[$nPage] = [];
    $this->year->cellOffset[$nPage] = [];

    for ($i=0;$i<count($this->cellOffset[$nPage]);$i++) {
      $curOffset=$this->cellOffset[$nPage][$i];

      array_push($this->day->cellOffset[$nPage],($curOffset+$pDay));
      array_push($this->mouth->cellOffset[$nPage],($curOffset+$pMouth));
      array_push($this->year->cellOffset[$nPage],($curOffset+$pYear));
    }
    //var_dump($this->day->cellOffset);
  //  print_r($this->mouth->cellOffset);
  }
  public function setDelimiter($newDel){
    $this->del=$newDel;
  }
  public function getDelimiter(){
    return $this->del;
  }
  public function renderRow($pdf,$sym=NULL){
    $nPage=$this->getNumPage();
    $offsetDay=$this->day->cellOffset[$nPage];
    $offsetMouth=$this->mouth->cellOffset[$nPage];
    $offsetYear=$this->year->cellOffset[$nPage];
    //var_dump(count($this->getTop()[$nPage]));

    for ($i=0;$i<count($this->getTop()[$nPage]);$i++) {
      $curTop=$this->getTop()[$nPage][$i];
      //var_dump($this->getTop()[$nPage][$i]);
      $this->day->setNumPage($nPage);
      $this->mouth->setNumPage($nPage);
      $this->year->setNumPage($nPage);
      $this->day->setTop([$nPage=>[$curTop]]);
      $this->mouth->setTop([$nPage=>[$curTop]]);
      $this->year->setTop([$nPage=>[$curTop]]);
      //var_dump($this->day->getTop());
    //  echo "~";
      $this->day->cellOffset[$nPage]=[$offsetDay[$i]];
      $this->mouth->cellOffset[$nPage]=[$offsetMouth[$i]];
      $this->year->cellOffset[$nPage]=[$offsetYear[$i]];
      $pdf=$this->day->renderRow($pdf);
      $pdf=$this->mouth->renderRow($pdf);
      $pdf=$this->year->renderRow($pdf);
  }
    return $pdf;
  }
  public function splitDate($value){
    $arrDate=explode($this->getDelimiter(),$value);
    $this->day->setValue($arrDate[0]);
    $this->mouth->setValue($arrDate[1]);
    $this->year->setValue($arrDate[2]);
  }
}

class Day extends Pattern
{

  function __construct()
  {
    $this->setLength([2]);
  }
}

class Mouth extends Pattern
{
  function __construct()
  {
    $this->setLength([2]);
  }
}

class Year extends Pattern
{
  function __construct()
  {
    $this->setLength([4]);
  }
}

?>
