<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    protected $table = 'Estante';
    protected $primaryKey = 'id';
    protected $fillable = ['alias'];

    public function Nivel()
    {
        return $this->belongsToMany('SisInvex\Nivel', 'Estante_Nivel', 'estante_id', 'nivel_id');
    }
}
