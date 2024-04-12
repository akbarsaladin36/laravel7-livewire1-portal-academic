<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $user_username;
    public $user_email;
    public $user_password;
    public $user_first_name;
    public $user_last_name;
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


    public function store()
    {
        $user = DB::table('users')->insert([
            'user_username' => $this->user_username,
            'user_email' => $this->user_email,
            'user_password' => Hash::make($this->user_password),
            'user_first_name' => $this->user_first_name,
            'user_last_name' => $this->user_last_name,
            'user_nik' => $this->user_nik,
            'user_nim' => $this->user_nim,
            'user_address' => $this->user_address,
            'user_phone_number' => $this->user_phone_number,
            'user_religion' => $this->user_religion,
            'user_father_name' => $this->user_father_name,
            'user_father_address' => $this->user_father_address,
            'user_father_job' => $this->user_father_job,
            'user_mother_name' => $this->user_mother_name,
            'user_mother_address' => $this->user_mother_address,
            'user_mother_job' => $this->user_mother_job,
            'user_created_date' => date("Y-m-d H:i:s"),
            'user_created_user_id' => Session::get('user_logged_in')->user_id,
            'user_created_username' => Session::get('user_logged_in')->user_username,
        ]);

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
