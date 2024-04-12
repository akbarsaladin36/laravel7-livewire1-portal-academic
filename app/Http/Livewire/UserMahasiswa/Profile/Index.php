<?php

namespace App\Http\Livewire\UserMahasiswa\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    
    public $user_username;
    public $user_email;
    public $user_fullname;
    public $user_nim;
    public $user_nik;
    public $user_fakultas_name;
    public $user_jurusan_name;
    public $user_address;
    public $user_phone_number;


    public function mount($username)
    {
        $mahasiswa = DB::table('users')
                   ->join('pa_fakultas','pa_fakultas.fakultas_id','=','users.user_fakultas_id')
                   ->join('pa_jurusans','pa_jurusans.jurusan_id','=','users.user_jurusan_id')
                   ->where('user_username',$username)
                   ->first();

        $this->user_username = $mahasiswa->user_username;
        $this->user_email = $mahasiswa->user_email;
        $this->user_fullname = empty($mahasiswa->user_first_name) && empty($mahasiswa->user_last_name) ? '-' : $mahasiswa->user_first_name.' '.$mahasiswa->user_last_name;
        $this->user_nim = $mahasiswa->user_nim;
        $this->user_nik = $mahasiswa->user_nik;
        $this->user_fakultas_name = $mahasiswa->fakultas_name;
        $this->user_jurusan_name = $mahasiswa->jurusan_name;
        $this->user_address = $mahasiswa->user_address;
        $this->user_phone_number = $mahasiswa->user_phone_number;
    }

    public function render()
    {
        return view('livewire.user-mahasiswa.profile.index');
    }
}
