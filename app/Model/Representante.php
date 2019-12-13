<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table = 'fsjm-repr';
    protected $incrementing = false;
    protected $primaryKey = 'repr-ced';
    protected $keyType = 'string';
    protected $fillable = [
        'repr-ced',
        'repr-no1',
        'repr-no2',
        'repr-no3',
        'repr-ap1',
        'repr-ap2',
        'repr-eda',
        'repr-fna',
        'repr-sex',
        'repr-tel',
        'repr-cse',
    ]; 
}
