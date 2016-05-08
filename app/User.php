<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 
	 
	 
	 
    protected $fillable = [
        'name', 'email', 'password', 'user_product_id','user_cc',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
	public function addons() {
        return $this->belongsToMany('\App\Addon')->withTimestamps();
    }
	
}
