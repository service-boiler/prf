<?php

namespace ServiceBoiler\Prf\Site\Filters\Address;

use Illuminate\Support\Facades\DB;
use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filters\BootstrapSelect;
use ServiceBoiler\Repo\Filters\WhereFilter;
use ServiceBoiler\Prf\Site\Models\AddressType;
use ServiceBoiler\Prf\Site\Models\Region;

class TypeSelectFilter extends WhereFilter
{
    use BootstrapSelect;

    protected $render = true;

    function apply($builder, RepositoryInterface $repository)
    {
        if ($this->canTrack() && !is_null($type_id = $this->get($this->name()))) {
            $builder = $builder->where(DB::raw($this->column()), $this->operator(), $type_id);
        }

        return $builder;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'type_id';
    }

    /**
     * @return string
     */
    public function column(): string
    {

        return 'type_id';

    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return array
     */
    public function options(): array
    {
        return AddressType::has('addresses')
            ->pluck('name', 'id')
            ->prepend(trans('site::messages.select_from_list'), '')
            ->toArray();
    }

    public function defaults(): array
    {
        return [''];
    }

    public function label()
    {
        return trans('site::address.type_id');
    }
}