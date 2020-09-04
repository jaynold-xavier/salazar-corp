<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $guarded = [];

    public function employees(){
        return $this -> hasMany(Employee::class);
    }
}
