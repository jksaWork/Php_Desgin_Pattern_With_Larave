<?php
namespace App\Patterns\Structural\Decorator;
class PhonePainter implements PhonePaintionInterface {
    public const  COLOR = 'red';
    /**
     * @var Phone $phone
     * */
    public  function paint(Phone $phone)
    {
        return $phone->setColor(self::COLOR);
    }
}
