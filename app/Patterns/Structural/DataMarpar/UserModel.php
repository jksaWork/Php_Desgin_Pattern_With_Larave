<?php
namespace App\Patterns\Structural\DataMarpar;
class UserModel
{
    /**
     * @var array UserData;
     * */

     public $username , $password;
    public function __construct(array $userData)
    {
        $this->username = $userData['username'];
        $this->password = $userData['password'];
    }

    public function getName(){
        return $this->username;
    }

    public function getPassword(){
        return $this->username;
    }

    public function setName(){
        return $this->username;
    }
    public function SetPassword(){
        return $this->username;
    }

}
