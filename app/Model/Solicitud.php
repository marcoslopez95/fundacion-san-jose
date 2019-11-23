<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //
    protected $table = 'fsjm-soli';
    protected $primaryKey = 'soli-cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'soli-cre',
        'soli-cpa',
        'soli-cod',
        'soli-fec',
    ];
    public function donacions()
    {
        return $this->belongsToMany('App\Model\Donacion', 'fsjt-sodo', 'sodo-cso', 'sodo-cdo');
    }
    public function representantes()
    {
        return $this->belongsTo('App\Model\Representante','repr-ced','soli-cre');
    }
    public function pacientes()
    {
        return $this->belongsTo('App\Model\Paciente','paci-ced','soli-cpa');
    }
}
