<?php

namespace ServiceBoiler\Prf\Site\Repositories;

use ServiceBoiler\Repo\Eloquent\Repository;
use ServiceBoiler\Prf\Site\Http\Requests\Admin\AcademyVideoRequest;
use ServiceBoiler\Prf\Site\Models\AcademyVideo;

class AcademyVideoRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return AcademyVideo::class;
    }

    /**
     * @return array
     */
    public function track():array
    {
        return [

        ];
    }
}