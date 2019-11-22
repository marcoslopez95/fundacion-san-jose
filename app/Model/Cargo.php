<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $table = 'fsjm-carg';
    protected $primaryKey = 'carg-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'carg-cod',
        'carg-des',
    ];
    public function miembros(){
        return $this->belongsTo('App\Model\Miembro','miem-ced','carg-cod');
    }
}
