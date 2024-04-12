<?php

namespace App\Http\Livewire\PaFakultas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public function delete($fakultas_id)
    {
        $fakultas = DB::table('pa_fakultas')->where('fakultas_id',$fakultas_id);

        if($fakultas) {
            $fakultas->delete();

            Session::flash('success','Data tersebut telah berhasil dihapus!');

            return redirect()->back();
        }
    }

    public function render()
    {

        $pa_fakultas = DB::table('pa_fakultas')->get();
        $no = 1;

        return view('livewire.pa-fakultas.index',[
            'fakultass' => $pa_fakultas,
            'no' => $no
        ]);
    }
}
