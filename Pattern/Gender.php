<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Gender extends Select
{
  function __construct($nPage,$value='')
  {
    $this->setNumPage($nPage);
    $this->setTop([[67.8,217.9]]);
    if($value==1){
        $this->obj=new Male();
        $this->obj->cellOffset=[[24,25]];
      }
    else{
      $this->obj=new Female();
      $this->obj->cellOffset=[[29,30]];
    }
  }
}
?>
