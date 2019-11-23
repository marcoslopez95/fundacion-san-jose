<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'fsjm_acti';
    protected $primaryKey = 'acti_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'acti_cod',
        'acti_des',
        'acti_fec',
    ];
    public function donacions(){
        return $this->belongsToMany('App\Model\Donacion','fsjt_acdo','acdo_cac','acdo_cdo');
    }
    public function sectors(){
        return $this->belongsToMany('App\Model\Sector','fsjt_acse','acse_cac','acse_cse');
    }
}
