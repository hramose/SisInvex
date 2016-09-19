<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey = 'id';
    protected $fillable = ['alias'];

    public function Pieza()
    {
        return $this->hasMany('SisInvex\Pieza', 'categoria_id', 'id');
    }
}
