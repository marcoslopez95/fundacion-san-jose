<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    //
    protected $table = 'fsjm_cond';
    public $incrementing = false;
    protected $primaryKey = 'cond_cod';
    protected $keyType = 'string';
    protected $fillable = [
        'cond_cod',
        'cond_des',
    ];
    public function pacientes(){
        return $this->belongsToMany('App\Model\Paciente','fsjt_cdpa','cdpa_ccd','cdpa_cpa');
    }
}
