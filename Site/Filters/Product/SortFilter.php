<?php

namespace ServiceBoiler\Prf\Site\Filters\Product;

use ServiceBoiler\Repo\Filters\OrderByFilter;

class SortFilter extends OrderByFilter
{

    /**
     * @return array
     */
    public function defaults(): array
    {
        return [
            'products.name' => 'ASC'
        ];
    }

}