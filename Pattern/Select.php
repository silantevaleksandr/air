<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Select extends Pattern
{
  protected $obj;
  private $marker='X';

  public function setMarker($newMark){
    $this->marker=$newMark;
  }
  public function getMarker(){
    return $this->marker;
  }
  public function renderRow($pdf,$sym=NULL){
    $nPage=$this->getNumPage();
    $offsetObj=$this->obj->cellOffset[$nPage];
    for ($i=0;$i<count($this->getTop()[$nPage]);$i++) {
      $this->obj->setNumPage($nPage);
      $curTop=$this->getTop()[$nPage][$i];
      $this->obj->setTop([$nPage=>[$curTop]]);
      $this->obj->cellOffset[$nPage]=[$offsetObj[$i]];
      $pdf=$this->obj->renderRow($pdf,$this->marker);
  }
    return $pdf;
  }

}
?>
