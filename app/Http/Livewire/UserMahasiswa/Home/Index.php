<?php

namespace App\Http\Livewire\UserMahasiswa\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $mahasiswa_username;

    public function mount()
    {
        $mahasiswa_logged_in = Session::get('mahasiswa_logged_in')->user_username;

        $user = DB::table('users')->where('user_username',$mahasiswa_logged_in)->first();
        
        $this->mahasiswa_username = $user->user_username;
    }

    public function render()
    {
        return view('livewire.user-mahasiswa.home.index');
    }
}
