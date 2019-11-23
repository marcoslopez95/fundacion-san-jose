<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
    //
    public $incrementing = false;
    protected $table = 'fsjm-paci';
    protected $primaryKey = 'paci-ced';
    
    protected $keyType = 'string';
    protected $fillable = [
        'paci-rep',
        'paci-ced',
        'paci-no1',
        'paci-no2',
        'paci-no3',
        'paci-ap1',
        'paci-ap2',
        'paci-eda',
        'paci-fna',
        'paci-sex',
        'paci-tel',
    ];
    public function discapacidads(){
        return $this->belongsToMany('App\Model\Discapacidad','fsjt-dspa','dspa-cpa','dspa-cdi');
    }
    public function condicions(){
        return $this->belongsToMany('App\Model\Condicion','fsjt-cdpa','cdpa-cpa','cdpa-ccd');
    }
    public function representante(){
        return $this->belongsTo('App\Model\Representante','repr-ced','paci-rep');
    }
    public function solicituds(){
        return $this->hasMany('App\Model\Solicitud','soli-cpa','paci-ced');
    }
}
