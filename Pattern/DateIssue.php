<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class DateIssue extends Date
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[93.0]]);
    $this->cellOffset=[[5]];
    parent::__construct(0,4,7);
    $this->splitDate($value);
  }
}
?>
