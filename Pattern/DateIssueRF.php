<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class DateIssueRF extends Date
{
  function __construct($nPage,$value='')
  {
    $this->setTop([[111.8]]);
    $this->setNumPage($nPage);
    $this->cellOffset=[[5]];
    parent::__construct(0,4,7);
    $this->splitDate($value);
  }
}
?>
