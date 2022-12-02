<?php
namespace App\Patterns\Structural\Adapter\AdpaterRealExample;

use App\Patterns\Structural\Adapter\AdpaterRealExample\BasicAuth as AdpaterRealExampleBasicAuth;
use App\Patterns\Structural\Adapter\AdpaterRealExample\MainAuthInterface;
use Laravel\Sanctum\Events\TokenAuthenticated;

class TokenAuth implements MainAuthInterface {
    /**
     * @var  TokenAuthInterface $interface
     * */
    public $interface;
    public function __construct(TokenAuthInterface $interface)
    {
        $this->interface = $interface;
    }
    public function login(array $pramas){
        return $this->interface->TokenLogin($pramas);
    }
}
