<?php
namespace App\Patterns\Structural\Strategy;

class MD5 implements StratgyIEncryptterface{
    public const TYPE = 'MD5';
    public function encrypt($str):array
    {
        return [
            md5($str),
            self::TYPE
        ];
    }
}
