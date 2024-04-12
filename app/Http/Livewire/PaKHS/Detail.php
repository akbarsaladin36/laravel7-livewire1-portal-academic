<?php

namespace App\Http\Livewire\PaKhs;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $mata_kuliah_name;
    public $mata_kuliah_kode;
    public $dosen_full_name;
    public $sks;
    public $kelas_kuliah_id;
    public $nilai_max;
    public $nilai_min;
    public $khs_id;

    public function mount($khs_id)
    {
        $khs = DB::table('pa_khs')
             ->join('pa_krs','pa_krs.krs_id','=','pa_khs.krs_id')
             ->join('pa_dosens','pa_dosens.dosen_id','=','pa_krs.dosen_id')
             ->where('khs_id',$khs_id)
             ->first();

        // dd($khs);

        $this->mata_kuliah_name = $khs->mata_kuliah_name;
        $this->mata_kuliah_kode = $khs->mata_kuliah_code;
        $this->dosen_full_name = $khs->dosen_full_name;
        $this->sks = $khs->sks;
        $this->kelas_kuliah_id = $khs->kelas_kuliah_id;
        $this->nilai_max = $khs->nilai_max;
        $this->nilai_min = $khs->nilai_min;
        $this->khs_id = $khs->khs_id;

    }

    public function render()
    {
        return view('livewire.pa-khs.detail');
    }
}
