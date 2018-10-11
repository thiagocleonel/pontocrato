<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    //
    public function secretaria(){
      return $this->belongsTo(Secretaria::class);
    }
    public function departamento(){
      return $this->belongsTo(Departamento::class);
    }
    public function cargo(){
      return $this->belongsTo(Cargo::class);
    }
    public function jornada(){
      return $this->belongsTo(Jornada::class);
    }
}
