<?php

namespace ServiceBoiler\Prf\Site\Filters\Datasheet;

use ServiceBoiler\Repo\Filters\OrderByFilter;

class DatasheetSortFilter extends OrderByFilter
{

    /**
     * @return array
     */
    public function defaults(): array
    {
        return [
            'datasheets.created_at' => 'DESC'
        ];
    }

}