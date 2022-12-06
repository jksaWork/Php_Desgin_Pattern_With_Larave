<?php
namespace App\Patterns\Structural\Decorator;
class RedPhonePainter  extends PhonePainter {
    public const COLOR = '-red-';
    public function paint(Phone $phone)
    {
        $phone->setColor(self::COLOR);
        parent::paint($phone);
    }
}
