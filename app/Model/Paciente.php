<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
    //
    protected $table = 'fsjm-paci';
    protected $primaryKey = 'paci-ced';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'paci-rep',
        'paci-ced',
        'paci-no1',
        'paci-no2',
        'paci-no3',
        'paci-ap1',
        'paci-ap2',
        'paci-eda',
        'paci-fna',
        'paci-sex',
        'paci-tel',
    ];

}
