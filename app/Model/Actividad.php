<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'fsjm-acti';
    protected $primaryKey = 'acti-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'acti-cod',
        'acti-des',
        'acti-fec',
    ];
    public function donacions(){
        return $this->belongsToMany('App\Model\Donacion','fsjt-acdo','acdo-cac','acdo-cdo');
    }
    public function sectors(){
        return $this->belongsToMany('App\Model\Sector','fsjt-acse','acse-cac','acse-cse');
    }
}
