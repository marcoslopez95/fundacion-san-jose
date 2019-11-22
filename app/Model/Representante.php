<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table = 'fsjm-repr';
    protected $incrementing = false;
    protected $primaryKey = 'repr-ced';
    protected $keyType = 'string';
    protected $fillable = [
        'repr-ced',
        'repr-no1',
        'repr-no2',
        'repr-no3',
        'repr-ap1',
        'repr-ap2',
        'repr-eda',
        'repr-fna',
        'repr-sex',
        'repr-tel',
        'repr-cse',
        'repr-pss',
    ]; 
    public function pacientes(){
        return $this->hasMany('App\Model\Paciente','paci-rep','repr-ced');
    }
    public function solicituds(){
        return $this->hasMany('App\Model\Solicitud','soli-cre','repr-ced');
    }
    public function sectors(){
        return $this->belongsTo('App\Model\Sector','sect-cod','repr-cse');
    }
    public function visitasocials(){
        return $this->belongsToMany('App\Model\VisitaSocial','fsjt-vsmi','vsmi-cre','vsmi-cvs');
    }
}
