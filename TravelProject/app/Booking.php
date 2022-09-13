<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        "user_name",
        "phn",
        "email",
        "travel_via",
        "days",
        "persons",
        "place_id",
        "from",
        "to"

    ];
    protected $bookings = 'bookings';

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
