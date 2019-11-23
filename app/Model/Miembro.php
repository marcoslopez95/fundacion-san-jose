<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    //
    protected $table = 'fsjm_miem';
    protected $primaryKey = 'miem_ced';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'miem_ced',
        'miem_no1',
        'miem_no2',
        'miem_no3',
        'miem_ap1',
        'miem_ap2',
        'miem_eda',
        'miem_fna',
        'miem_sex',
        'miem_tel',
        'miem_cse',
        'miem_pss',
    ];
    public function cargos(){
        return $this->belongsToMany('App\Model\Cargo','fsjt_mcar','mcar_cmi','mcar_cca');
    }
    public function visitasocials(){
        return $this->belongsToMany('App\Model\VisitaSocial','fsjt_vsmi','vsmi_cmi','vsmi_cvs');
    }
    public function sectors(){
        return $this->belongsTo('App\Model\Sector','sect_cod','miem_cse');
    }
}
