<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

class Factory extends FactoryAbstract
{

}

?>
