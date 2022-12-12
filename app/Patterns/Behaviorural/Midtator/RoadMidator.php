<?php
namespace App\Patterns\Behaviorural\Midtator;

use App\Patterns\Behaviorural\Midtator\LightStopInterFace;
use App\Patterns\Behaviorural\Midtator\Road;

class RoadMidator implements  LightStopInterFace {
    public $left, $right;
    public function __construct(Road $left ,Road $right)
    {
        //  Set Road And Midator

        $this->left = $left;
        $this->left->setMidator($this);
        $this->right = $right;
        $this->right->setMidator($this);
    }

    public function action(Road $road, string $event)
    {
        if($road->getId() == 'left'){
            if($event == Road::MOVE_EVENT){
                $this->left->move();
                $this->right->stop();
            }else{
                $this->left->stop();
                $this->right->stop();
            }
        }
        else{
            if($event == Road::MOVE_EVENT){
                $this->left->stop();
                $this->right->stop();
            }else{
                $this->left->move();
                $this->right->stop();
            }
        }
    }

}
