<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $table = 'Pieza';
    protected $primaryKey = 'id';
    protected $fillable = ['alias', 'codigo', 'descripcion', 'marca_pieza_id', 'categoria_id'];

    public function Marca_Pieza()
    {
        return $this->belongsTo('SisInvex\Marca_Pieza', 'marca_pieza_id', 'id');
    }

    public function Categoria()
    {
        return $this->belongsTo('SisInvex\Categoria', 'categoria_id', 'id');
    }

    public function Vehiculo()
    {
        return $this->belongsToMany('SisInvex\Vehiculo', 'Pieza_Vehiculo', 'pieza_id', 'vehiculo_id')->withPivot('id', 'deleted_at');
    }

    public function Pedido()
    {
        return $this->belongsToMany('SisInvex\Pedido', 'Detalle_Pedido', 'pieza_id', 'pedido_id')->withPivot('id', 'serial', 'descripcion', 'deleted_at');
    }

    public function getFullDescriptionAttribute()
    {
        return "Alias: " . $this->alias . " / Codigo: " . $this->codigo;
    }
}
