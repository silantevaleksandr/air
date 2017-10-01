<?php
namespace Pattern;

spl_autoload_register(function ($class) {
    include $class.'.php';
});

abstract class Pattern
{
  private $top = array();       //позиция по Y
  private $length = array();    //количество ячеек в строке для записи
  private $nPage;               //номер страницы
  private $value;               //значение по ключу key массива $_GET or $_POST
  private $row = 1;               //количество строк объекта
  //позиции ячеек по горизонтали
  private $cellMargin = [[20.4,24.4,28.6,32.5,36.6,40.8,44.7,48.8,52.9,57.1,61.2,65.3,69.4,73.5,
  77.6,81.5,85.7,89.9,94.0,98.1,102.2,106.3,110.4,114.5,118.6,122.7,126.8,130.9,
  134.9,139.0,143.1,147.2,151.3,155.4,159.5,163.6,167.7,171.8],
  [20.4,24.4,28.6,32.8,36.8,40.9,45.1,49.2,53.4,57.5,61.6,65.8,69.9,74.0,
  78.2,82.4,86.5,90.6,94.7,98.9,103.0,107.1,111.4,115.4,119.6,123.7,127.8,131.9,
  136.1,140.2,144.3,148.5,152.7,156.8,160.9,165.0,169.2,173.3]];
  protected $cellOffset = [[]];  //номер первой ячейки


public function renderRow($pdf, $sym = null)
{
    if (is_null($sym)) {
        //разбиваем строку на символы
        $arrVal = $this->mb_str_split(mb_strtoupper($this->value, 'UTF-8'));
    } else {
        $arrVal = mb_strtoupper($sym);
    }
    for ($i = 0; $i < count($this->top[$this->nPage]); $i++) {
        $curLength = 0;
        $rowMargin = 0;
        for ($r = 0; $r < $this->row; $r++){
            if ($this->row>1) {
                $co=$this->cellOffset[$this->nPage][$r]-1;
            } else {
                $co=$this->cellOffset[$this->nPage][$i]-1;
            }
            $curLength+=$this->length[$r];
            for ($j=($this->length[$r-1]*$r), $cur=0; $j<count($arrVal); $j++, $cur++) {
                if ($j==$curLength) {
                    break;
                }
                $x=$this->cellMargin[$this->nPage][$co+$cur];
                $y=$this->top[$this->nPage][$i]+$rowMargin;
                $pdf->SetXY($x,$y);
                $pdf->Cell(3.0, 2.2, $arrVal[$j], 0, 0, 'C', 0, '', 0, false,'T','C');
            }
            $rowMargin+=6.3;
        }
    }
return $pdf;
}
public function setTop($top)
{
    $this->top=$top;
}
public function getTop()
{
  return $this->top;
}
public function setLength($length)
{
  $this->length=$length;
}
public function getLength()
{
  return $this->length;
}
public function setNumPage($nPage)
{
  $this->nPage=$nPage;
}
public function getNumPage()
{
  return $this->nPage;
}
public function setValue($value)
{
  $this->value=$value;
}
public function getValue()
{
  return $this->value;
}
public function setRow($row)
{
  $this->row=$row;
}
public function getRow()
{
  return $this->row;
}
private function mb_str_split($str)
{
    preg_match_all('#.{1}#uis', $str, $out);
    return $out[0];
}
}
