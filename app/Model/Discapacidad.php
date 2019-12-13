<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    //
    protected $table = 'fsjm-disc';
    protected $primaryKey = 'disc-cod';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'disc-cod',
        'disc-des',
    ];
}
