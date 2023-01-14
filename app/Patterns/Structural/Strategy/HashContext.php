<?php
namespace App\Patterns\Structural\Strategy;

class HashContext implements StratgyIEncryptterface{
    public StratgyIEncryptterface $interface;
    public function __construct(StratgyIEncryptterface $StratgyIEncryptterface)
    {
        $this->interface = $StratgyIEncryptterface;
    }

    public function encrypt($str):array
    {
        return $this->interface->encrypt($str);
    }
}
