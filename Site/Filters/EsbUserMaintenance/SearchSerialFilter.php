<?php

namespace ServiceBoiler\Prf\Site\Filters\EsbUserMaintenance;

use ServiceBoiler\Repo\Contracts\RepositoryInterface;
use ServiceBoiler\Repo\Filters\BootstrapInput;
use ServiceBoiler\Repo\Filters\SearchFilter as BaseFilter;

class SearchSerialFilter extends BaseFilter
{

    use BootstrapInput;

    protected $render = true;
    protected $search = 'search_serial';

    function apply($builder, RepositoryInterface $repository)
    {
        if ($this->canTrack()) {
            if (!empty($this->columns())) {
                $words = $this->split($this->get($this->search));
                if (!empty($words)) {
                    $builder->whereHas('esbProduct', function ($query) use ($words) {
                        foreach ($words as $word) {
                            $query->where(function ($query) use ($word) {
                                foreach ($this->columns() as $column) {
                                    $query->orWhereRaw("LOWER({$column}) LIKE LOWER(?)", ["%{$word}%"]);
                                }
                            });
                        }
                    });
                }
//                else{
//                    $builder->whereRaw("false");
//                }
            }
        }

        return $builder;
    }

    protected function columns()
    {
        return [
            'esb_user_products.serial',
        ];
    }

    public function label()
    {
        return trans('site::repair.placeholder.search_serial');
    }

    public function tooltip()
    {
        return trans('site::repair.help.search_serial');
    }

}