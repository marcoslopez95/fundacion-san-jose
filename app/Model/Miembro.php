<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    //
    protected $table = 'fsjm-miem';
    protected $primaryKey = 'miem-ced';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'miem-ced',
        'miem-no1',
        'miem-no2',
        'miem-no3',
        'miem-ap1',
        'miem-ap2',
        'miem-eda',
        'miem-fna',
        'miem-sex',
        'miem-tel',
        'miem-cse',
        'miem-pss',
    ];
    public function cargos(){
        return $this->belongsToMany('App\Model\Cargo','fsjt-mcar','mcar-cmi','mcar-cca');
    }
    public function visitasocials(){
        return $this->belongsToMany('App\Model\VisitaSocial','fsjt-vsmi','vsmi-cmi','vsmi-cvs');
    }
    public function sectors(){
        return $this->belongsTo('App\Model\Sector','sect-cod','miem-cse');
    }
}
