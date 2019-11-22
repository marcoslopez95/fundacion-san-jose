<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    //
    protected $table = 'fsjm-cond';
    protected $incrementing = false;
    protected $primaryKey = 'cond-cod';
    protected $keyType = 'string';
    protected $fillable = [
        'cond-cod',
        'cond-des',
    ];
    public function pacientes(){
        return $this->belongsToMany('App\Model\Paciente','fsjt-cdpa','cdpa-ccd','cdpa-cpa');
    }
}
