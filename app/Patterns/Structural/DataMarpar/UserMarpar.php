<?php

namespace App\Patterns\Structural\DataMarpar;
class  UserMarpar{
    /*
    * @var SystemStorage  $systemStorge
    */
    public $systemStorge;
    public function __construct(SystemStorge $systemStorge)
    {
        $this->systemStorge = $systemStorge;
    }

    public function  SaveData(UserModel  $userModel) :bool
    {
        $data = [
            'username' => $userModel->username,
            'password' => $userModel->password,
        ];
        return $this->systemStorge->insert($data);
    }

    public function findAll() : Array
    {
        return $this->systemStorge->data;
    }

    public function find($id): UserModel
    {
        $model = ($this->systemStorge->find($id));
        return new UserModel($model);
    }
}

