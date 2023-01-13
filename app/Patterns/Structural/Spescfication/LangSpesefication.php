<?php
namespace App\Patterns\Structural\Spescfication;
use App\Patterns\Structural\Spescfication\CV;
use App\Patterns\Structural\Spescfication\SpescifactionInterface;

class LangSpesefication  implements SpescifactionInterface{
    public $lang;
    public function __construct(string $lang)
    {
        $this->lang =$lang;
    }
    public function isStisfedBy(CV $cv): bool
    {
        return in_array($this->lang, $cv->languages);
    }
}
