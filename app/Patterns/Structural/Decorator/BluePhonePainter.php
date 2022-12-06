<?php
namespace App\Patterns\Structural\Decorator;
class BluePhonePainter  extends PhonePainter {
    public const COLOR = '-blue-';
    public function paint(Phone $phone)
    {
        $phone->setColor(self::COLOR);
        parent::paint($phone);
    }
}
