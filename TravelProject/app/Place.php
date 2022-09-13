<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "place_name",
        "description",
        "category",
        "things_to_do",
        "top_attractions",
        "days",
        "file",
        "category_id"
    ];


    protected $places = 'places';

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
