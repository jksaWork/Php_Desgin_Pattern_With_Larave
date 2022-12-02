<?php
namespace App\Patterns\Structural\Adapter\AdpaterRealExample;

use App\Patterns\Structural\Adapter\AdpaterRealExample\MainAuthInterface;

class BasicAuth implements MainAuthInterface {
    /**
     * @var  AuthunticatedInterface $interface
     * */
    public $interface;
    public function __construct(AuthunticatedInterface $interface)
    {
        $this->interface = $interface;
    }
    public function login(array $pramas){
        // dd('hello');
        return $this->interface->BasicLogin($pramas);
    }
}
