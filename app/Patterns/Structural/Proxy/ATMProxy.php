<?php
namespace App\Patterns\Structural\Proxy;
class ATMProxy extends BanckAccount  implements BankInterface{
    // parent::
    public $balance = null;
    public function getBlance(): int
    {
            return  $this->balance = parent::getBlance();
    }
}
