<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{

    public function destroy()
    {
        
    }

    public function render()
    {

        $users = DB::table('users')->get();

        return view('livewire.user.index',[
            'users' => $users,
            'no' => 1
        ]);
    }
}
