<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    //
    public function tipoLogradouro(){
      return $this->belongsTo(TipoLogradouro::class);
    }
}
