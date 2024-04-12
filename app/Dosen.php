<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $primaryKey = 'dosen_id';

    public $timestamps = false;

    protected $fillable = [
        'dosen_username', 
        'dosen_email', 
        'dosen_password',
        'dosen_full_name', 
        'nidn', 
        'dosen_address',
        'dosen_phone_number', 
    ];
}
