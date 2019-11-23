<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    //
    protected $table = 'fsjm-disc';
    protected $primaryKey = 'disc-cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'disc-cod',
        'disc-des',
    ];
    public function pacientes(){
        return $this->belongsToMany('App\Model\Paciente','fsjt-dspa','dspa-cdi','dspa-cpa');
    }
}
