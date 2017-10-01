<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class DateIssueHost extends Date
{

  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[],[115.6]]);
    $this->cellOffset=[[],[5]];
    parent::__construct(0,4,7);
    $this->splitDate($value);
  }
}
?>
