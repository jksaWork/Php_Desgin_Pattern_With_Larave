<?php
namespace App\Patterns\Creational\Pool;
class ComputerPool {
public $freeComputer = [];
public $BusyComputer = [];
    public function SaleComputer(): ComputerModel {
        if(count($this->freeComputer)  ==  0){
            $compouter = new ComputerModel(count($this->freeComputer));
        }else{
            $compouter = array_pop($this->freeComputer);
        }
        $this->BusyComputer[ spl_object_hash($compouter)] = $compouter;
        return $compouter;
    }

    public function ReturnComputer(ComputerModel $compouter){
        if(isset($this->BusyComputer[spl_object_hash($compouter)]))
        {
            unset($this->BusyComputer[spl_object_hash($compouter)]);
            $this->freeComputer[spl_object_hash($compouter)] = $compouter;
        }
    }

    public function GetPoolReport(){
        return "Free Computer Count :" . count($this->freeComputer) . 'Busy Compouter Count :' . count($this->freeComputer);
    }

}
