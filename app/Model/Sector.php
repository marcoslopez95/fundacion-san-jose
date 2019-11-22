<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $table = 'fsjm-sect';
    protected $primaryKey = 'sect-cod';
    protected $keyType = 'string';
    protected $incrementing = false;
    protected $fillable = [
        'sect-cod',
        'sect-des',
    ];
    public function actividads(){
        return $this->belongsToMany('App\Model\Actividad','fsjt-acse','acse-cse','acse-cac');
    }
    public function miembros(){
        return $this->hasMany('App\Model\Miembro','miem-cse','sect-cod');
    }
    public function representantes(){
        return $this->hasMany('App\Model\Representante','repr-cse','sect-cod');
    }
}
