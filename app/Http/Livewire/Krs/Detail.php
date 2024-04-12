<?php

namespace App\Http\Livewire\Krs;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $krs_id;
    public $mata_kuliah_kode;
    public $mata_kuliah_name;
    public $dosen_full_name;
    public $sks;
    public $sifat_mata_kuliah;
    public $kelas_kuliah_code;

    public function mount($krs_id)
    {
        $krs = DB::table('pa_krs')
              ->join('pa_dosens','pa_dosens.dosen_id','=','pa_krs.dosen_id')
              ->join('pa_kelas','pa_kelas.kelas_id','=','pa_krs.kelas_kuliah_id')
              ->where('pa_krs.krs_id','=',$krs_id)
              ->first();

        $this->krs_id = $krs->krs_id;
        $this->mata_kuliah_kode = $krs->mata_kuliah_code;
        $this->mata_kuliah_name = $krs->mata_kuliah_name;
        $this->dosen_full_name = $krs->dosen_full_name;
        $this->sks = $krs->sks;
        $this->sifat_mata_kuliah = $krs->sifat_mata_kuliah;
        $this->kelas_kuliah_code = $krs->kelas_code;
    }

    public function render()
    {
        return view('livewire.krs.detail');
    }
}
