<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $table = 'fsjm_carg';
    protected $primaryKey = 'carg_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'carg_cod',
        'carg_des',
    ];
    
    public function miembros(){
        return $this->belongsToMany('App\Model\Miembro','fsjt_mcar','mcar_cca','mcar_cmi');
    }
}
