<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //
    protected $table = 'fsjm_inst';
    protected $primaryKey = 'inst_cod';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'inst_cod',
        'inst_des',
        'inst_dep',
    ];
    public function donacions(){
        return $this->belongsToMany('App\Model\Donacion','fsjt_indo','indo_cin','indo_cdo');
    }
}
