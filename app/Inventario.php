<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'Inventario';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha_ingreso', 'unidades_iniciales', 'unidades_actuales', 'descripcion', 'detalle_pedido_id', 'estante_nivel_id'];
}
