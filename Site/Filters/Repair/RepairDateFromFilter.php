<?php

namespace ServiceBoiler\Prf\Site\Filters\Repair;

use ServiceBoiler\Repo\Filters\BootstrapTempusDominusDate;
use ServiceBoiler\Repo\Filters\DateFilter;

class RepairDateFromFilter extends DateFilter
{

    use BootstrapTempusDominusDate;

    protected $render = true;
    protected $search = 'date_repair_from';

    public function label()
    {
        return trans('site::repair.date_repair');
    }

    protected function placeholder()
    {
        return trans('site::messages.date_from');
    }

    protected function attributes()
    {
        return parent::attributes()->merge(['style' => 'width:100px;']);
    }

    /**
     * @return string
     */
    public function column()
    {
        return 'repairs.date_repair';
    }

    protected function operator()
    {
        return '>=';
    }


}