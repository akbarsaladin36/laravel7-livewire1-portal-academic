<?php

namespace App\Http\Livewire\PaKhs;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $khss = DB::table('pa_khs')
                ->join('pa_krs','pa_krs.krs_id','=','pa_khs.krs_id')
                ->get();
        $no = 1;

        return view('livewire.pa-khs.index',[
            'khss' => $khss,
            'no' => $no
        ]);
    }
}
