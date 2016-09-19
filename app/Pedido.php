<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedido';
    protected $primaryKey = 'id';
    protected $fillable = ['codigo', 'fecha', 'proveedor_id'];

    public function Proveedor()
    {
        return $this->belongsTo('SisInvex\Proveedor', 'proveedor_id', 'id');
    }

    public function Pieza()
    {
        return $this->belongsToMany('SisInvex\Pieza', 'Detalle_Pedido', 'pedido_id', 'pieza_id')->withPivot('id', 'serial', 'descripcion', 'deleted_at');
    }
}
