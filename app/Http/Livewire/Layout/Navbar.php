<?php

namespace App\Http\Livewire\Layout;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Navbar extends Component
{

    public $user_status;
    public $user_username;

    public function logout()
    {
        if(Session::exists('user_logged_in')) {
            Session::forget('user_logged_in');
            return redirect()->route('index');
        } else if(Session::exists('dosen_logged_in')) {
            Session::forget('dosen_logged_in');
            return redirect()->route('index');
        } else {
            Session::forget('mahasiswa_logged_in');
            return redirect()->route('index');
        }
    }

    public function mount() {
        
        if(Session::exists('user_logged_in')) {
            $session_check = Session::get('user_logged_in');
            $username = $session_check->user_username;
        } else if(Session::exists('dosen_logged_in')) {
            $session_check = Session::get('dosen_logged_in');
            $username = $session_check->dosen_username;
        } else {
            $session_check = Session::get('mahasiswa_logged_in');
            $username = $session_check->user_username;
        }

        $this->user_username = $username;

    }

    public function render()
    {
        return view('livewire.layout.navbar');
    }
}
