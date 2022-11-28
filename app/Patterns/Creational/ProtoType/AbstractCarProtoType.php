<?php
namespace App\Patterns\Creational\ProtoType;

abstract class AbstractCarProtoType {
    private $model , $type;

    abstract public function __clone();

    public function setProtoType($type){
        $this->type = $type;
    }
    public function getProtoType(){
        return $this->type;
    }
}
