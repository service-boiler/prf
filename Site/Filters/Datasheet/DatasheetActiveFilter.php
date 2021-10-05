<?php

namespace ServiceBoiler\Prf\Site\Filters\Datasheet;

use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filter;

class DatasheetActiveFilter extends Filter
{
    function apply($builder, RepositoryInterface $repository)
    {
        return $builder->where('active', 1);
    }
}