<?php
namespace App\Patterns\Creational\Pool;
class ComputerModel {
    public $hash , $int;
    public function __construct($int , $hash = '')
    {
        $this->int = $int;
    }


}
