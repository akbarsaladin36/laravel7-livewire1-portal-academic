<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaKRS extends Model
{
    protected $primaryKey = 'mahasiswa_krs_id';

    public $timestamps = false;

    protected $fillable = [
        'krs_id'
    ];
}
