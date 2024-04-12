<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Edit extends Component
{
    public $user_username;
    public $user_email;
    public $user_password;
    public $user_fullname;
    public $user_nik;
    public $user_nim;
    public $user_address;
    public $user_phone_number;
    public $user_religion;
    public $user_father_name;
    public $user_father_address;
    public $user_father_job;
    public $user_mother_name;
    public $user_mother_address;
    public $user_mother_job;

    public function mount($username)
    {
        $user = DB::table('users')->where('user_username',$username)->first();

        $this->user_username = $user->user_username;
        $this->user_email = $user->user_email;
        $this->user_fullname = empty($user->user_first_name) && empty($user->user_last_name) ? '-' : $user->user_first_name.' '.$user->user_last_name;
        $this->user_nik = $user->user_nik;
        $this->user_nim = $user->user_nim;
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
        return view('livewire.user.edit');
    }
}
