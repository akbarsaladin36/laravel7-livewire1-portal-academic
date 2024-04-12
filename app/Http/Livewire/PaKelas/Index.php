<?php

namespace App\Http\Livewire\PaKelas;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $kelass = DB::table('pa_kelas')->get();
        $no = 1;

        return view('livewire.pa-kelas.index',[
            'kelass' => $kelass,
            'no' => $no
        ]);
    }
}
