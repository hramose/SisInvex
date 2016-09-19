<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pieza_Vehiculo extends Model
{
	use SoftDeletes;

    protected $table = 'Pieza_Vehiculo';
    protected $primaryKey = 'id';
    protected $fillable = ['pieza_id', 'vehiculo_id'];
    protected $dates = ['deleted_at'];
}
