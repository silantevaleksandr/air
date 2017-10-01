<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class TypeDocRF extends Select
{
  function __construct($nPage,$value='')
  {
    $this->setTop([[105.3]]);
    $this->setNumPage($nPage);
    switch ($value) {
      case '1':
        $this->obj=new Visa();
        $this->obj->cellOffset=[[4]];
        break;
      case '2':
        $this->obj=new View();
        $this->obj->cellOffset=[[11]];
        break;
      case '3':
      $this->obj=new TempResidence();
      $this->obj->cellOffset=[[21]];
        break;
      default:
      $this->obj=new Visa();
      $this->obj->cellOffset=[[4]];
      break;
    }

  }
}
class Visa extends Pattern
{
  function __construct()
  {
    $this->setLength([1]);
  }
}

class View extends Pattern
{
  function __construct()
  {
    $this->setLength([1]);
  }
}
class TempResidence extends Pattern
{
  function __construct()
  {
    $this->setLength([1]);
  }
}
?>
