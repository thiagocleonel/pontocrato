<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAfastamento extends Model
{
    //
    protected $table = 'tipo_afastamentos';

    public function afastamentos(){
      return $this->hasMany(Afastamento::class);
    }
}
