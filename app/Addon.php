<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
     public function users() {
        return $this->belongsToMany('\App\User')->withTimestamps();
    }
}
