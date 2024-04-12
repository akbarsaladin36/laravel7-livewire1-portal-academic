<?php

namespace App\Http\Livewire\UserMahasiswa\Profile;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $user_id;
    public $user_username;
    public $user_email;
    public $user_first_name;
    public $user_last_name;
    public $user_nik;
    public $user_nim;
    public $user_fakultas_id;
    public $user_jurusan_id;
    public $user_address;
    public $user_phone_number;
    public $user_religion;
    public $user_father_name;
    public $user_father_address;
    public $user_father_job;
    public $user_mother_name;
    public $user_mother_address;
    public $user_mother_job;

    public function update()
    {
        $mahasiswa = DB::table('users')
                   ->where('user_id',$this->user_id)
                   ->update([
                    'user_username' => $this->user_username,
                    'user_email' => $this->user_email,
                    'user_first_name' => $this->user_first_name,
                    'user_last_name' => $this->user_last_name,
                    'user_nik' => $this->user_nik,
                    'user_nim' => $this->user_nim,
                    'user_fakultas_id' => $this->user_fakultas_id,
                    'user_jurusan_id' => $this->user_jurusan_id,
                    'user_address' => $this->user_address,
                    'user_phone_number' => $this->user_phone_number,
                    'user_religion' => $this->user_religion,
                    'user_father_name' => $this->user_father_name,
                    'user_father_address' => $this->user_father_address,
                    'user_father_job' => $this->user_father_job,
                    'user_mother_name' => $this->user_mother_name,
                    'user_mother_address' => $this->user_mother_address,
                    'user_mother_job' => $this->user_mother_job,
                    'user_updated_date' => date("Y-m-d H:i:s"),
                    'user_updated_user_id' => Session::get('mahasiswa_logged_in')->user_id,
                    'user_updated_username' => Session::get('mahasiswa_logged_in')->user_username
                   ]);

        Session::flash('success','Data profil mahasiswa ini telah berhasil diupdate!');

        return redirect()->route('user-mahasiswa.profile.index',['username'=>$this->user_username]);
    }

    public function mount($username)
    {
        $user = DB::table('users')->where('user_username',$username)->first();

        $this->user_id = $user->user_id;
        $this->user_username = $user->user_username;
        $this->user_email = $user->user_email;
        $this->user_first_name = $user->user_first_name;
        $this->user_last_name = $user->user_last_name;
        $this->user_nik = $user->user_nik;
        $this->user_nim = $user->user_nim;
        $this->user_fakultas_id = $user->user_fakultas_id;
        $this->user_jurusan_id = $user->user_jurusan_id;
        $this->user_address = $user->user_address;
        $this->user_phone_number = $user->user_phone_number;
        $this->user_religion = $user->user_religion;
        $this->user_father_name = $user->user_father_name;
        $this->user_father_address = $user->user_father_address;
        $this->user_father_job = $user->user_father_job;
        $this->user_mother_name = $user->user_mother_name;
        $this->user_mother_address = $user->user_mother_address;
        $this->user_mother_job = $user->user_mother_job;
    }

    public function render()
    {

        $fakultass = DB::table('pa_fakultas')->get();

        $jurusans = DB::table('pa_jurusans')->get();

        return view('livewire.user-mahasiswa.profile.edit',[
            'fakultass' => $fakultass,
            'jurusans' => $jurusans
        ]);
    }
}
