<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Purpose extends Select
{
  function __construct($nPage,$value='')
  {
    $this->setTop([[118.0]]);
    $this->setNumPage($nPage);
    switch ($value) {
      case '1':
        $this->obj=new Employ([[8]]);
        break;
      case '2':
        $this->obj=new Tourism([[11]]);
        break;
      case '3':
      $this->obj=new Business([[15]]);
        break;
      case '4':
      $this->obj=new Studies([[18]]);
        break;
      case '5':
        $this->obj=new Job([[21]]);
        break;
      case '6':
        $this->obj=new Privates([[24]]);
        break;
      case '7':
      $this->obj=new Transit([[27]]);
        break;
      case '8':
      $this->obj=new Human([[32]]);
        break;
      case '9':
      $this->obj=new Other([[35]]);
        break;
      default:
      $this->obj=new Other([[35]]);
      break;
    }
  }
}
class Employ extends Pattern
{

  function __construct($pos)
  {
    $this->cellOffset=$pos;
    $this->setLength([1]);
  }
}

class Tourism extends Pattern
{

  function __construct($pos)
  {
    $this->cellOffset=$pos;
    $this->setLength([1]);
  }
}
class Business extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Studies extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Job extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Privates extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Transit extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Human extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
class Other extends Pattern
{

  function __construct($pos)
  {
    $this->setLength([1]);
    $this->cellOffset=$pos;
  }
}
?>
