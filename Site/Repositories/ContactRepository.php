<?php

namespace ServiceBoiler\Prf\Site\Repositories;

use ServiceBoiler\Repo\Eloquent\Repository;
use ServiceBoiler\Prf\Site\Models\Contact;

class ContactRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Contact::class;
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