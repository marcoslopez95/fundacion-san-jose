<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    protected $table = 'fsjm_dona';
    protected $primaryKey = 'dona_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dona_cod',
        'dona_des',
        'dona_stk',
        'dona_prs',
    ];
    public function actividads(){
        return $this->belongsToMany('App\Model\Actividad','fsjt_acdo','acdo_cdo','acdo_cac');
    }
    public function institucions(){
        return $this->belongsToMany('App\Model\Institucion','fsjt_indo','indo_cdo','indo_cin');
    }
    public function solicituds(){
        return $this->belongsToMany('App\Model\Solicitud','fsjt_sodo','sodo_cdo','sodo_cso');
    }
}
