<?php

namespace App\Http\Livewire\PaJurusan;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $jurusans = DB::table('pa_jurusans')->get();
        $no = 1;

        return view('livewire.pa-jurusan.index',[
            'jurusans' => $jurusans,
            'no' => $no
        ]);
    }
}
