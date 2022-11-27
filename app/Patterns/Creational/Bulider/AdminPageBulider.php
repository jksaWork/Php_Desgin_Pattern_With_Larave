<?php
namespace App\Patterns\Creational\Bulider;
use App\Patterns\Creational\Bulider\InterFac\PageBilderInterFace;

class AdminPageBulider implements PageBilderInterFace {
public $str;

public function header()
{
$this->str .= 'Admin Page Blider Header\n';
}
public function nav()
{
    $this->str .= 'Admin Page Blider Nav\n';
}

public function content()
{
    $this->str .= 'Admin Page Conten';
}

public function footer()
{
    $this->str .= 'Admin Page Footer';
}
public function getPage(){
    return $this->str;
}

}
