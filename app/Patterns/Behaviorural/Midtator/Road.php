<?php
namespace App\Patterns\Behaviorural\Midtator;
abstract class Road  {
public const STOP_EVENT = 'stop' , MOVE_EVENT = 'move';
public $status;
public $midrator;
public function __construct(LightStopInterFace $midrator = null)
{
$this->midrator = $midrator;
}

public function setMidator(LightStopInterFace $midrator = null)
{
$this->midrator = $midrator;
}
abstract public function getId();

public function stop(){
    $this->status = self::STOP_EVENT;
}

public function move(){
    $this->status = self::MOVE_EVENT;
}

public function getStatus(){
    return $this->status;
}
}
