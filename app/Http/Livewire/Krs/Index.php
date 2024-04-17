<?php

namespace App\Http\Livewire\Krs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public function delete($krs_id)
    {
        $krs = DB::table('pa_krs')->where('krs_id',$krs_id);

        if($krs) {
            $krs->delete();
            Session::flash('success','Data krs ini sudah berhasil dihapus!');
            return redirect()->back();
        }
    }


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
