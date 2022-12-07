<?php
namespace App\Patterns\Structural\Proxy;
interface BankInterface {
    public  function deposit($amount);
    public function withDrawol($amount);
    public function getBlance();
}
