<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
    //
    public $incrementing = false;
    protected $table = 'fsjm_paci';
    protected $primaryKey = 'paci_ced';
    
    protected $keyType = 'string';
    protected $fillable = [
        'paci_rep',
        'paci_ced',
        'paci_no1',
        'paci_no2',
        'paci_no3',
        'paci_ap1',
        'paci_ap2',
        'paci_eda',
        'paci_fna',
        'paci_sex',
        'paci_tel',
    ];
    public function discapacidads(){
        return $this->belongsToMany('App\Model\Discapacidad','fsjt_dspa','dspa_cpa','dspa_cdi');
    }
    public function condicions(){
        return $this->belongsToMany('App\Model\Condicion','fsjt_cdpa','cdpa_cpa','cdpa_ccd');
    }
    public function representante(){
        return $this->belongsTo('App\Model\Representante','repr_ced','paci_rep');
    }
    public function solicituds(){
        return $this->hasMany('App\Model\Solicitud','soli_cpa','paci_ced');
    }
}
