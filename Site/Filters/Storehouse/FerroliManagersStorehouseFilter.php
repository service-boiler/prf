<?php

namespace ServiceBoiler\Prf\Site\Filters\Storehouse;

use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filter;

class FerroliManagersStorehouseFilter extends Filter
{

    function apply($builder, RepositoryInterface $repository)
    {
        $notification_address = auth()->user()->email;
        $notifiRegions = auth()->user()->notifiRegions;
        if(!auth()->user()->hasRole('admin_site') && !auth()->user()->hasRole('supervisor') && !auth()->user()->hasRole('service_super') ) {
        /* 
            $builder = $builder->where( function ($query) use ($notifiRegions) {
                    $query->whereHas('user',function ($query) use ($notifiRegions) {
                
                            $query->whereHas('addresses',function ($query) use ($notifiRegions) {
                                $query->whereHas('region', function ($query) use ($notifiRegions) {
                                    $query->whereIn('region_id',$notifiRegions->pluck('id'));
                                })->orWhereIn('region_id',$notifiRegions->pluck('id')) ;
                            })->orWhere('created_by',auth()->user()->id);
                    });
                }); */
          $builder = $builder->where( function ($query) use ($notifiRegions) {
                    $query->whereHas('user',function ($query) use ($notifiRegions) {
                            $query->whereIn('region_id',$notifiRegions->pluck('id'))->orWhere('created_by',auth()->user()->id);
                            });
                    });
            
        }
        return $builder;
    }
}