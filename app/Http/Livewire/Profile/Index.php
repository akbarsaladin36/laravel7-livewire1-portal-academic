<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{

    public $user_username;
    public $user_email;
    public $user_fullname;
    public $user_nim;
    public $user_nik;
    public $user_address;
    public $user_phone_number; 

    public function mount($username) {

        $user = DB::table('users')->where('user_username',$username)->first();

        $this->user_username = $user->user_username;
        $this->user_email = $user->user_email;
        $this->user_fullname = empty($user->user_first_name) && empty($user->user_last_name) ? '-' : $user->user_first_name.' '.$user->user_last_name;
        $this->user_nim = $user->user_nim;
        $this->user_nik = $user->user_nik;
        $this->user_address = $user->user_address;
        $this->user_phone_number = $user->user_phone_number;
        
    }

    public function render()
    {
        return view('livewire.profile.index');
    }
}
