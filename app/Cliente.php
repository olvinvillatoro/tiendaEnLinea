<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function scopeWhereCliente($query, $cliente){
        return $query->where('id_cliente',$cliente);
    }
}
