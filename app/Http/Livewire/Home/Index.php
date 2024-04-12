<?php

namespace App\Http\Livewire\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $user_username;

    public function mount()
    {
        $user_logged_in = Session::get('user_logged_in')->user_username;

        $user = DB::table('users')->where('user_username',$user_logged_in)->first();
        
        $this->user_username = $user->user_username;
    }

    public function render()
    {
        return view('livewire.home.index');
    }
}
