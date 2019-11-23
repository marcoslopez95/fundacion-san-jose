<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table = 'fsjm_repr';
    public $incrementing = false;
    protected $primaryKey = 'repr_ced';
    protected $keyType = 'string';
    protected $fillable = [
        'repr_ced',
        'repr_no1',
        'repr_no2',
        'repr_no3',
        'repr_ap1',
        'repr_ap2',
        'repr_eda',
        'repr_fna',
        'repr_sex',
        'repr_tel',
        'repr_cse',
        'repr_pss',
    ]; 
    public function pacientes(){
        return $this->hasMany('App\Model\Paciente','paci_rep','repr_ced');
    }
    public function solicituds(){
        return $this->hasMany('App\Model\Solicitud','soli_cre','repr_ced');
    }
    public function sectors(){
        return $this->belongsTo('App\Model\Sector','sect_cod','repr_cse');
    }
    public function visitasocials(){
        return $this->belongsToMany('App\Model\VisitaSocial','fsjt_vsmi','vsmi_cre','vsmi_cvs');
    }
}
