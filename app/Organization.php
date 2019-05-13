<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public $timestamps = false;
    protected $table="organizations";
    protected $fillable=['name','location'];


    public function Employee()
    {
        return $this->hasMany('App\Employee');
    }
}
