<?php
namespace App\Patterns\Structural\Proxy;
class BanckAccount {
    private $transcation = [];
    public  function deposit($amount){
        if($this->getBlance() >  $amount)  {
            $this->transcation[] = -$amount;
        }
        return false;
    }
    public function withDrawol($amount){
        $this->transcation[] = +$amount;
        return true;
    }
    public function getBlance():int {
        return array_sum($this->transcation);
    }
}
