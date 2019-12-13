<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    protected $table = 'fsjm-dona';
    protected $primaryKey = 'dona-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dona-cod',
        'dona-des',
        'dona-stk',
        'dona-prs',
    ];
}
