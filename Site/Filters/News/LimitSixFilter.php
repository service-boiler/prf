<?php

namespace ServiceBoiler\Prf\Site\Filters\News;

use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filter;

class LimitSixFilter extends Filter
{
    function apply($builder, RepositoryInterface $repository)
    {
        return $builder->limit(6);
    }
}