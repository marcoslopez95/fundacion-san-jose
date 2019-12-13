<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'fsjm-acti';
    protected $primaryKey = 'acti-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'acti-cod',
        'acti-des',
        'acti-fec',
    ];
}
