<?php

namespace ServiceBoiler\Prf\Site\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use ServiceBoiler\Prf\Site\Facades\Site;

class AcademyStageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'name'  => $this->name,
        ];
    }
}