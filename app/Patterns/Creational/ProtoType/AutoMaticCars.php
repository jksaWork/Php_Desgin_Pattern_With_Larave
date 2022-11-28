<?php
namespace App\Patterns\Creational\ProtoType;

class AutoMaticCars extends  AbstractCarProtoType {
    private $type = 'AutoMatic';
    function __clone(){

    }
}
