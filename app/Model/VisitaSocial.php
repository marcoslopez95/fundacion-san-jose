<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisitaSocial extends Model
{
    //
    protected $table = 'fsjm_viso';
    protected $primaryKey = 'viso_cod';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'viso_cod',
        'viso_apt',
        'viso_obs',
    ];

    public function miembros()
    {
        return $this->belongsToMany('App\Model\Miembro','fsjt_vsmi','vsmi_cvs','vsmi_cmi');
    }
}
