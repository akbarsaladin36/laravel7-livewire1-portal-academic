<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa_Kelas extends Model
{
    protected $primaryKey = 'kelas_id';

    public $timestamps = false;

    protected $fillable = [
        'kelas_code', 
        'kelas_name', 
        'jumlah_mahasiswa'
    ];
}
