<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    //
    protected $table = 'fsjm-miem';
    protected $primaryKey = 'miem-ced';
    protected $incrementing = false;
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
    ];
}
