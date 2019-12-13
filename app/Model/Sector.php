<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $table = 'fsjm-sect';
    protected $primaryKey = 'sect-cod';
    protected $keyType = 'string';
    protected $incrementing = false;
    protected $fillable = [
        'sect-cod',
        'sect-des',
    ];
}
