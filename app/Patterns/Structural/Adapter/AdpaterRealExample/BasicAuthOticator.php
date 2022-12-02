<?php
namespace App\Patterns\Structural\Adapter\AdpaterRealExample;

use BasicLogin\LoginWithUserName;
use PHPUnit\Framework\Constraint\LogicalNot;
use Tokens\LoginWithToken;

class BasicAuthOticator implements AuthunticatedInterface {
    public function BasicLogin(array $pramas)
    {
        $authunticator = new LoginWithUserName($pramas);
        return  $authunticator->login($pramas);
    }
}
