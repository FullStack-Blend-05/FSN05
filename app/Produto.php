<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categoria()
    {   //relação 1:n
        return $this->belongsTo('App\Categoria');
    }
}
