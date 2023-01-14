<?php
namespace App\Patterns\Structural\Strategy;

class Base64Hash implements StratgyIEncryptterface{
    public const TYPE = 'BASE_64';
    public function encrypt($str):array
    {
        return [
            base64_encode($str),
            self::TYPE
        ];
    }
}
