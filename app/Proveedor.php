<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'Proveedor';
    protected $primaryKey = 'id';
    protected $fillable = ['alias', 'descripcion'];

    public function Pedido()
    {
        return $this->hasMany('SisInvex\Pedido', 'proveedor_id', 'id');
    }
}
