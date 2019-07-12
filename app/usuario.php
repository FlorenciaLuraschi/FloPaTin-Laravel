<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class usuario extends Model
{
    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'country_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
      return $this->belongsTo(Country::class);
    }

    public function post(){
      return $this->hasMany(Post::class);
    }
}
