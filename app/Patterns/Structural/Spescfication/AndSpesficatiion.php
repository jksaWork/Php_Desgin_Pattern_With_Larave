<?php
namespace App\Patterns\Structural\Spescfication;

use function PHPUnit\Framework\returnValue;

class AndSpesficatiion implements SpescifactionInterface {
    public array $conds ;
    public function __construct(SpescifactionInterface ... $conds)
    {
        $this->conds = $conds;
    }
    public function isStisfedBy(Cv $cv):bool
    {
        foreach ($this->conds as $key => $value) {
            if(!$value->isStisfedBy($cv)) return false;
        }
        return true;
    }
}
