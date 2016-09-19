<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Marca_Pieza extends Model
{
    protected $table = 'Marca_Pieza';
    protected $primaryKey = 'id';
    protected $fillable = ['alias'];

    public function Pieza()
    {
        return $this->hasMany('SisInvex\Pieza', 'marca_pieza_id', 'id');
    }
}
