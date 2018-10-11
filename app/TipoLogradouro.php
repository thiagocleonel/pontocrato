<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLogradouro extends Model
{
    //
    protected $table = 'tipo_logradouros';

    public function logradouros(){
      return $this->hasMany(Logradouro::class);
    }

}
