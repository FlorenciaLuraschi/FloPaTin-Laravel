<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class countrie extends Model
{
    public function users(){
      return $this->hasMany(user::class);
    }
}
