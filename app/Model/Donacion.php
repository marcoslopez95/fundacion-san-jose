<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    protected $table = 'fsjm-dona';
    protected $primaryKey = 'dona-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dona-cod',
        'dona-des',
        'dona-stk',
        'dona-prs',
    ];
    public function actividads(){
        return $this->belongsToMany('App\Model\Actividad','fsjt-acdo','acdo-cdo','acdo-cac');
    }
    public function institucions(){
        return $this->belongsToMany('App\Model\Institucion','fsjt-indo','indo-cdo','indo-cin');
    }
    public function solicituds(){
        return $this->belongsToMany('App\Model\Solicitud','fsjt-sodo','sodo-cdo','sodo-cso');
    }
}
