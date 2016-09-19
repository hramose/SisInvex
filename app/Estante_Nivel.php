<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Estante_Nivel extends Model
{
    protected $table = 'Estante_Nivel';
    protected $primaryKey = 'id';
    protected $fillable = ['estante_id', 'nivel_id'];

    public function Detalle_Pedido()
    {
        return $this->belongsToMany('SisInvex\Detalle_Pedido');
    }
}
