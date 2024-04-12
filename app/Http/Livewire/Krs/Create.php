<?php

namespace App\Http\Livewire\Krs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $mata_kuliah_code;
    public $mata_kuliah_name;
    public $kelas_kuliah_id;
    public $sifat_mata_kuliah;
    public $dosen_id;
    public $sks;

    public function store()
    {
        $mata_kuliah = DB::table('pa_krs')->insert([
            'dosen_id' => $this->dosen_id,
            'mata_kuliah_code' => $this->mata_kuliah_code,
            'mata_kuliah_name' => $this->mata_kuliah_name,
            'kelas_kuliah_id' => $this->kelas_kuliah_id,
            'sifat_mata_kuliah' => $this->sifat_mata_kuliah,
            'sks' => $this->sks,
            'created_krs_date' => date("Y-m-d H:i:s"),
            'created_krs_user_id' => Session::get('user_logged_in')->user_id,
            'created_krs_user_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data mata kuliah baru berhasil ditambahkan!');

        return redirect()->route('krs.index');
    }

    public function render()
    {

        $dosens = DB::table('pa_dosens')->get();

        $kelass = DB::table('pa_kelas')->get();

        return view('livewire.krs.create',[
            'dosens' => $dosens,
            'kelass' => $kelass
        ]);
    }
}
