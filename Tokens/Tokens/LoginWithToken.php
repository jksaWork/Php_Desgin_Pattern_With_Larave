<?php
namespace Tokens;
class LoginWithToken {

    /**
     * @var string $key
     * @var string $value
    */
    public function TokenLogin(string $key , string $value){
        return base64_encode($value . "|" . $key);
    }
}
