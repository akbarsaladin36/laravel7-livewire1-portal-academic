<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $primaryKey = 'krs_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 
        'mata_kuliah_code', 
        'mata_kuliah_name',
        'kelas_name'
    ];
}
