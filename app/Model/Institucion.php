<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //
    protected $table = 'fsjm-inst';
    protected $primaryKey = 'inst-cod';
    protected $keyType = 'string';
    protected $incrementing = false;
    protected $fillable = [
        'inst-cod',
        'inst-des',
        'inst-dep',
    ];
    public function donacions(){
        return $this->belongsToMany('App\Model\Donacion','fsjt-indo','indo-cin','indo-cdo');
    }
}
