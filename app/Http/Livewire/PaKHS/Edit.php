<?php

namespace App\Http\Livewire\PaKhs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $khs_id;
    public $nilai_max;
    public $nilai_min;
    public $krs_id;

    public function update()
    {
        $khs = DB::table('pa_khs')
              ->where('khs_id',$this->khs_id)
              ->update([
                'nilai_max' => $this->nilai_max,
                'nilai_min' => $this->nilai_min,
                'krs_id' => $this->krs_id,
                'khs_updated_date' => date("Y-m-d H:i:s"),
                'khs_updated_user_id' => Session::get('user_logged_in')->user_id,
                'khs_updated_username' => Session::get('user_logged_in')->user_username
              ]);

        Session::flash('success','Data KHS ini telah berhasil diupdate!');

        return redirect()->route('pa-khs.detail',['khs_id'=>$this->khs_id]);
    }

    public function mount($khs_id)
    {
        $khs = DB::table('pa_khs')->where('khs_id',$khs_id)->first();

        $this->nilai_max = $khs->nilai_max;
        $this->nilai_min = $khs->nilai_min;
        $this->khs_id = $khs->khs_id;
        $this->krs_id = $khs->krs_id;
    }

    public function render()
    {
        $krss = DB::table('pa_krs')->get();

        return view('livewire.pa-khs.edit',[
            'krss'=>$krss
        ]);
    }
}
