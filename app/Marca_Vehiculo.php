<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Marca_Vehiculo extends Model
{
    protected $table = 'Marca_Vehiculo';
    protected $primaryKey = 'id';
    protected $fillable = ['alias'];

    public function Vehiculo()
    {
        return $this->hasMany('SisInvex\Vehiculo', 'marca_vehiculo_id', 'id');
    }
}
