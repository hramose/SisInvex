<?php

namespace SisInvex;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'Nivel';
    protected $primaryKey = 'id';
    protected $fillable = ['alias'];

    public function Estante()
    {
        return $this->belongsToMany('SisInvex\Estante');
    }
}
