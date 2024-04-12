<?php

namespace App\Http\Livewire\PaKelas;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $kelas_code;
    public $kelas_name;
    public $jumlah_mahasiswa;
    public $fakultas_name;
    public $jurusan_name;
    public $kelas_id;

    public function mount($kelas_id)
    {
        $kelas = DB::table('pa_kelas')
               ->join('pa_fakultas','pa_fakultas.fakultas_id','=','pa_kelas.fakultas_id')
               ->join('pa_jurusans','pa_jurusans.jurusan_id','=','pa_kelas.jurusan_id')
               ->where('kelas_id',$kelas_id)
               ->first();

        $this->kelas_code = $kelas->kelas_code;
        $this->kelas_name = $kelas->kelas_name;
        $this->jumlah_mahasiswa = $kelas->jumlah_mahasiswa;
        $this->fakultas_name = $kelas->fakultas_name;
        $this->jurusan_name = $kelas->jurusan_name;
        $this->kelas_id = $kelas->kelas_id;
    }

    public function render()
    {
        return view('livewire.pa-kelas.detail');
    }
}
