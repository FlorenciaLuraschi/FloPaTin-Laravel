<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class usuario extends Model
{
    protected $table = "users";

    public function country(){
      return $this->belongsTo(Country::class);
    }
}
