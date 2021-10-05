<?php

namespace ServiceBoiler\Prf\Site\Repositories;

use ServiceBoiler\Repo\Eloquent\Repository;
use ServiceBoiler\Prf\Site\Models\Address;

class AddressRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Address::class;
    }

    /**
     * @return array
     */
    public function track(): array
    {
        return [

        ];
    }
}