<?php

namespace ServiceBoiler\Prf\Site\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductShortCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function toArray($request)
    {
        return ProductShortResource::collection($this->collection);
    }
}