<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $table="employees";
    protected $fillable=['name','title','date_hire','organization_id'];

    public function organization()
    {
        return $this->belongsTo('App\Organization');
    }
}
