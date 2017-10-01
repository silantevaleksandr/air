<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class PassportHostSN extends SeriesNumber
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[],[109.4]]);
    $this->cellOffset=[[],[25]];
    parent::__construct(0,5);
    $this->splitSN($value);
  }

}
?>
