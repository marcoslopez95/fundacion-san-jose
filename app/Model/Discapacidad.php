<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    //
    protected $table = 'fsjm_disc';
    protected $primaryKey = 'disc_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'disc_cod',
        'disc_des',
    ];
    public function pacientes(){
        return $this->belongsToMany('App\Model\Paciente','fsjt_dspa','dspa_cdi','dspa_cpa');
    }
}
