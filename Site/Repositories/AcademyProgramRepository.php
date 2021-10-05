<?php

namespace ServiceBoiler\Prf\Site\Repositories;

use ServiceBoiler\Repo\Eloquent\Repository;
use ServiceBoiler\Prf\Site\Models\AcademyProgram;

class AcademyProgramRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return AcademyProgram::class;
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