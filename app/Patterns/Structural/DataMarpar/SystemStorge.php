<?php
namespace App\Patterns\Structural\DataMarpar;
class SystemStorge {
    /**
     * @var array $array
     * */
    public array $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function insert(array $data){
        $this->data[] = $data;
        return true;
    }

    public function find(string $id){
        return $this->data[$id - 1];
    }

}
