<?php

namespace ZnCore\Relation\Libs\Types;

use ZnCore\Collection\Interfaces\Enumerable;
use ZnCore\Relation\Interfaces\RelationInterface;

class VoidRelation extends BaseRelation implements RelationInterface
{

    protected function loadRelation(Enumerable $collection)
    {

    }
}
