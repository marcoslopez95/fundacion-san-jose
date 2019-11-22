<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisitaSocial extends Model
{
    //
    protected $table = 'fsjm-viso';
    protected $primaryKey = 'viso-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'viso-cod',
        'viso-apt',
        'viso-obs',
    ];

    public function miembros()
    {
        return $this->belongsToMany('App\Model\Miembro','fsjt-vsmi','vsmi-cvs','vsmi-cmi');
    }
}
