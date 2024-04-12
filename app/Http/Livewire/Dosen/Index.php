<?php

namespace App\Http\Livewire\Dosen;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $dosens = DB::table('pa_dosens')->get();
        $no = 1;

        return view('livewire.dosen.index',[
            'dosens' => $dosens,
            'no' => $no
        ]);
    }
}
