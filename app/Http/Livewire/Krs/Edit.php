<?php

namespace App\Http\Livewire\Krs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $krs_id;
    public $mata_kuliah_code;
    public $mata_kuliah_name;
    public $dosen_id;
    public $sks;
    public $kelas_kuliah_id;
    public $sifat_mata_kuliah;

    public function update()
    {
        $krs = DB::table('pa_krs')->where('krs_id',$this->krs_id)
             ->update([
                'mata_kuliah_code' => $this->mata_kuliah_code,
                'mata_kuliah_name' => $this->mata_kuliah_name,
                'dosen_id' => $this->dosen_id,
                'sks' => $this->sks,
                'kelas_kuliah_id' => $this->kelas_kuliah_id,
                'sifat_mata_kuliah' => $this->sifat_mata_kuliah
             ]);

        Session::flash('success','Data KRS ini telah berhasil diupdate!');

        return redirect()->route('krs.detail',['krs_id'=>$this->krs_id]);
    }

    public function mount($krs_id)
    {
        $krs = DB::table('pa_krs')->where('krs_id',$krs_id)->first();

        $this->krs_id = $krs->krs_id;
        $this->mata_kuliah_code = $krs->mata_kuliah_code;
        $this->mata_kuliah_name = $krs->mata_kuliah_name;
        $this->dosen_id = $krs->dosen_id;
        $this->sks = $krs->sks;
        $this->kelas_kuliah_id = $krs->kelas_kuliah_id;
        $this->sifat_mata_kuliah = $krs->sifat_mata_kuliah;
    }

    public function render()
    {
        $dosens = DB::table('pa_dosens')->get();

        return view('livewire.krs.edit',[
            'dosens' => $dosens
        ]);
    }
}
