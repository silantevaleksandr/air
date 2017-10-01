<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Host extends Select
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[],[90.6]]);
    if($value==1)
      {
        $this->obj=new Organization();
        $this->obj->cellOffset=[[],[32]];
      }
    else
      {
        $this->obj=new Individual();
        $this->obj->cellOffset=[[],[38]];
      }
  }
}
class Organization extends Pattern
{
  function __construct()
  {
    $this->setLength([1]);
  }
}

class Individual extends Pattern
{

  function __construct()
  {
    $this->setLength([1]);
  }
}
?>
