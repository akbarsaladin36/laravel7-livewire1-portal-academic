<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa_Fakultas extends Model
{
    protected $primaryKey = 'fakultas_id';

    public $timestamps = false;

    protected $fillable = [
        'fakultas_name', 
        'fakultas_slug', 
        'fakultas_description',
    ];

}
