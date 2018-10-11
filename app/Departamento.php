<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    public function secretaria(){
      return $this->belongsTo(Secretaria::class);
    }
}
