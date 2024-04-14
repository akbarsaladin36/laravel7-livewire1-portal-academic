<?php

namespace App\Http\Livewire\PaPeriodeKuliah;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public function delete($periode_kuliah_slug)
    {
        $periode_kuliah = DB::table('pa_periode_kuliahs')->where('periode_kuliah_semester_slug',$periode_kuliah_slug);
        
        if($periode_kuliah) {
            $periode_kuliah->delete();
            Session::flash('success','Data periode kuliah ini sudah berhasil dihapus');
            return redirect()->back();
        }
    }


    public function render()
    {
        $periode_kuliahs = DB::table('pa_periode_kuliahs')->get();
        $no = 1;

        return view('livewire.pa-periode-kuliah.index',[
            'periode_kuliahs' => $periode_kuliahs,
            'no' => $no
        ]);
    }
}
