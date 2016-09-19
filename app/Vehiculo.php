<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'Vehiculo';
    protected $primaryKey = 'id';
    protected $fillable = ['modelo', 'ano', 'marca_vehiculo_id'];

    public function Marca_Vehiculo()
    {
        return $this->belongsTo('SisInvex\Marca_Vehiculo', 'marca_vehiculo_id', 'id');
    }

    public function Pieza()
    {
        return $this->belongsToMany('SisInvex\Pieza', 'Pieza_Vehiculo', 'vehiculo_id', 'pieza_id')->withPivot('id', 'deleted_at');
    }

    public function getFullDescriptionAttribute()
    {
        return "Modelo: " . $this->modelo . " / Año: " . $this->ano;
    }
}
