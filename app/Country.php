<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\usuario;
class Country extends Model
{
    protected $table= "countries";

    public function usuario(){
      return $this->hasMany(usuario::class);
    }

}
