<?php

namespace ServiceBoiler\Prf\Site\Repositories;

use ServiceBoiler\Repo\Eloquent\Repository;
use ServiceBoiler\Prf\Site\Filters\EventType\SortFilter;
use ServiceBoiler\Prf\Site\Models\MemberStatus;

class MemberStatusRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return MemberStatus::class;
    }

    /**
     * @return array
     */
    public function track(): array
    {
        return [
            SortFilter::class
        ];
    }
}