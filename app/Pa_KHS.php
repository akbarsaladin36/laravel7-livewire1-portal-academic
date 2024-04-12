<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa_KHS extends Model
{
    protected $primaryKey = 'khs_id';

    public $timestamps = false;

    protected $fillable = [
        'krs_id', 
        'nilai_max', 
        'nilai_min',
    ];
}
