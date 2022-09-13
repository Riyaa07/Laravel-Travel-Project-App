<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "name"
    ];

    protected $dates = ['deleted_at'];
    protected $countries = 'countries';


    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
