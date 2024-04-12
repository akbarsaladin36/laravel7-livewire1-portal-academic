<?php

namespace App\Http\Livewire\Krs;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $krss = DB::table('pa_krs')
              ->join('pa_kelas','pa_kelas.kelas_id','=','pa_krs.kelas_kuliah_id')
              ->get();
        $no = 1;

        return view('livewire.krs.index',[
            'krss' => $krss,
            'no' => $no
        ]);
    }
}
