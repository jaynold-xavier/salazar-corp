<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Pipeline\Pipeline;


class Employee extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    // public function getAgeAttribute($attribute){
    //     return [
    //         '29' => 'not allowed',
    //         '22' => 'allowed',
    //         '45' => 'allowed',
    //         '33' => 'allowed',
    //         '56' => 'allowed',
    //         '66' => 'allowed',
    //         '55' => 'allowed'
    //     ][$attribute];
    // }
    
    public function scopeSales($query){
        return $query -> where('job', 'Sales');
    }

    public function scopeEngineers($query){
        return $query -> where('job', 'Engineer');
    }

    public function organisation(){
        return $this -> belongsTo(Organisation::class);
    }

    public static function allFiltered(){
        return app(Pipeline::class)
        ->send(Employee::query())
        ->through([
            \App\QueryFilters\Name::class,
            \App\QueryFilters\Sort::class,
        ])
        ->thenReturn()
        ->get();
    }
}
