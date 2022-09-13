<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function places() {
        return $this->belongsToMany(Place::class)->withTimestamps();
    }
}
