<?php
namespace App\Patterns\Creational\Bulider;
use App\Patterns\Creational\Bulider\InterFac\PageBilderInterFace;

class UserPageBulider   implements  PageBilderInterFace{
public $str;


public function header()
{
$this->str .= 'User Page Blider Header';
}
public function nav()
{
    $this->str .= 'User Page Blider Nav';
}

public function content()
{
    $this->str .= 'User Page Conten';
}

public function footer()
{
    $this->str .= 'User Page Footer';
}
public function getPage(){
    return $this->str;
}

}
