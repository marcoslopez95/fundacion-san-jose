<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $table = 'fsjm_sect';
    protected $primaryKey = 'sect_cod';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'sect_cod',
        'sect_des',
    ];
    public function actividads(){
        return $this->belongsToMany('App\Model\Actividad','fsjt_acse','acse_cse','acse_cac');
    }
    public function miembros(){
        return $this->hasMany('App\Model\Miembro','miem_cse','sect_cod');
    }
    public function representantes(){
        return $this->hasMany('App\Model\Representante','repr_cse','sect_cod');
    }
}
