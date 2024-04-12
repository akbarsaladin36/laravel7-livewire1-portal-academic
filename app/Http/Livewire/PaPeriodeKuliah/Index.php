<?php

namespace App\Http\Livewire\PaPeriodeKuliah;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $periode_kuliahs = DB::table('pa_periode_kuliahs')->get();

        return view('livewire.pa-periode-kuliah.index',[
            'periode_kuliahs' => $periode_kuliahs
        ]);
    }
}
