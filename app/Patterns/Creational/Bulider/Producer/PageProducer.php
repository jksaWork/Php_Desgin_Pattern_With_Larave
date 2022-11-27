<?php
namespace App\Patterns\Creational\Bulider\Producer;

use App\Patterns\Creational\Bulider\InterFac\PageBilderInterFace;

// use App\Patterns\Creational\Bulider\Interface\PageBilderInterFace;

class PageProducer {
    public $interface;
    /**
     * @var  PageBilderInterFace $interface
     */
    public function __construct(PageBilderInterFace $interface)
    {
        $this->interface = $interface;
    }

    public function ProduceThePage(){
        $this->interface->header();
        $this->interface->nav();
        $this->interface->content();
        $this->interface->footer();
        return $this->interface->getPage();
    }
}
