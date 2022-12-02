<?php
namespace BasicLogin;
class LoginWithUserName {
    public $password ,  $username;
    public function __construct(array $params)
    {
        $this->username = $params['username'];
        $this->password = $params['password'];
    }
    public function login(){
        return $this->username . '-' . $this->password;
    }
    /**
     * @var string $password
     * @var string $username
    */
    public function Basiclogin(string $username , string $password){
        return $username . '-' . $password;
    }
}
