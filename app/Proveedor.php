<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function scopeWhereProveedor($query, $proveedor){
        return $query->where('id_proveedor',$proveedor);
    }

}
