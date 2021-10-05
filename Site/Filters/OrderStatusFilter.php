<?php

namespace ServiceBoiler\Prf\Site\Filters;

use ServiceBoiler\Repo\Filters\BootstrapSelect;
use ServiceBoiler\Repo\Filters\WhereFilter;
use ServiceBoiler\Prf\Site\Models\OrderStatus;

class OrderStatusFilter extends WhereFilter
{
    use BootstrapSelect;

    protected $render = true;

    /**
     * Get the evaluated contents of the object.
     *
     * @return array
     */
    public function options(): array
    {
        return ['' => trans('site::order.status_defaults')] + OrderStatus::orderBy('id')->pluck('name', 'id')->toArray();
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'status_id';
    }

    /**
     * @return string
     */
    public function column(): string
    {

        return 'status_id';

    }

    public function defaults(): array
    {
        return [''];
    }

    public function label()
    {
        return trans('site::order.status_id');
    }
}