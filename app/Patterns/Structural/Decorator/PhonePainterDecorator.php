<?php
namespace App\Patterns\Structural\Decorator;
class PhonePainterDecorator implements PhonePaintionInterface {
    public $phonePaintionInterface ,  $COLOR = 'red';
    /**
     * @var PhonePaintionInterface $phonePaintionInterface
     * */
        public function __construct(PhonePaintionInterface $phonePaintionInterface)
        {
            $this->phonePaintionInterface = $phonePaintionInterface;
        }
     /**
     * @var  $phone
     * */
    public  function paint(Phone $phone)
    {
        $this->phonePaintionInterface->paint($phone);
    }
}
