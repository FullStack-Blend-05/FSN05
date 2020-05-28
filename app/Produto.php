<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function produtos()
    {   //relação 1:n
        return $this->hasMany('App\Produto','categoria_id');
    }
}
