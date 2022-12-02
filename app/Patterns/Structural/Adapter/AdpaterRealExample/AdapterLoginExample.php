<?php
namespace App\Patterns\Structural\Adapter\AdpaterRealExample;

use BasicLogin\LoginWithUserName;

class AdapterLoginExample {
    public $interface;
    /**
     * @var MainAuthInterface $interface
     * */
        public function __construct(MainAuthInterface $interface)
        {
            $this->interface = $interface;
        }
        public function login(array $params)
        {
            // dd($params);
           return $this->interface->login($params);
        }

}

