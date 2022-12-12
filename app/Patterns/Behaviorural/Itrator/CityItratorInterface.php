<?php

namespace App\Patterns\Behaviorural\Itrator;

interface CityItratorInterface {
public function current();
public function nextIndex();
public function getIndex();
public function valid();
public function rewind();
public function key();
}
