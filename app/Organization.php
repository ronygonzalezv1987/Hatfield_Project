<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public $timestamps = false;
    protected $table="organizations";
    protected $fillable=['id','name','location'];


    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}

