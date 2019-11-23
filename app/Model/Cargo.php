<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $table = 'fsjm-carg';
    protected $primaryKey = 'carg-cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'carg-cod',
        'carg-des',
    ];
    public function miembros(){
        return $this->belongsToMany('App\Model\Miembro','fsjt-mcar','mcar-cca','mcar-cmi');
    }
}
