<?php

namespace ServiceBoiler\Prf\Site\Filters\Authorization;

use Illuminate\Support\Facades\DB;
use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filters\BootstrapSelect;
use ServiceBoiler\Repo\Filters\WhereFilter;
use ServiceBoiler\Prf\Site\Models\Region;

class AuthorizationRegionFilter extends WhereFilter
{
    use BootstrapSelect;

    protected $render = true;

   function apply($builder, RepositoryInterface $repository)
    {
        if ($this->canTrack() && !is_null($region_id = $this->get($this->name()))) {
            $builder = $builder->whereHas('user', function ($query) use ($region_id) {
                $query->where(DB::raw($this->column()), $this->operator(), $region_id);
            });
        }

        return $builder;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'region_id';
    }

    /**
     * @return string
     */
    public function column(): string
    {

        return 'region_id';

    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return array
     */
    public function options(): array
    {
        return Region::whereHas('userAddresses', function ($query) {
            $query->whereActive(1);
        })
            ->orderBy('name')->pluck('name', 'id')
            ->prepend(trans('site::address.help.region_defaults'), '')
            ->toArray();
    }

    public function defaults(): array
    {
        return [''];
    }

    public function label()
    {
        return trans('site::address.region_id');
    }

}