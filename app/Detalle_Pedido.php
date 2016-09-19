<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_Pedido extends Model
{
	use SoftDeletes;

    protected $table = 'Detalle_Pedido';
    protected $primaryKey = 'id';
    protected $fillable = ['serial', 'descripcion', 'pedido_id', 'pieza_id'];
    protected $dates = ['deleted_at'];

    public function Estante_Nivel()
    {
        return $this->belongsToMany('SisInvex\Estante_Nivel', 'Inventario', 'detalle_pedido_id', 'estante_nivel_id');
    }
}
