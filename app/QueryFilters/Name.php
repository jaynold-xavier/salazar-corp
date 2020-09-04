<?php

namespace App\QueryFilters;

use Closure;

class Name extends Filter{
    protected function applyFilter($builder){
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}