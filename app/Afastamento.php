<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afastamento extends Model
{
    //
    public function tipo(){
      return $this->belongsTo(TipoAfastamento::class);
    }
}
