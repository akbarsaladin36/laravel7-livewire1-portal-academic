<?php

namespace App\Http\Livewire\UserDosen\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $dosen_username;

    public function mount()
    {
        $dosen_logged_in = Session::get('dosen_logged_in')->dosen_username;

        $user = DB::table('pa_dosens')->where('dosen_username',$dosen_logged_in)->first();
        
        $this->dosen_username = $user->dosen_username;
    }

    public function render()
    {
        return view('livewire.user-dosen.home.index');
    }
}
