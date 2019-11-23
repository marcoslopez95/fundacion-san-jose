<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //
    protected $table = 'fsjm_soli';
    protected $primaryKey = 'soli_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'soli_cre',
        'soli_cpa',
        'soli_cod',
        'soli_fec',
    ];
    public function donacions()
    {
        return $this->belongsToMany('App\Model\Donacion', 'fsjt_sodo', 'sodo_cso', 'sodo_cdo');
    }
    public function representantes()
    {
        return $this->belongsTo('App\Model\Representante','repr_ced','soli_cre');
    }
    public function pacientes()
    {
        return $this->belongsTo('App\Model\Paciente','paci_ced','soli_cpa');
    }
}
