<?php

namespace App\Http\Livewire\PaKelas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $kelas_code;
    public $kelas_name;
    public $jumlah_mahasiswa;
    public $fakultas_id;
    public $jurusan_id;

    public function store()
    {
        $kelas = DB::table('pa_kelas')->insert([
            'kelas_code' => $this->kelas_code,
            'kelas_name' => $this->kelas_name,
            'jumlah_mahasiswa' => $this->jumlah_mahasiswa,
            'fakultas_id' => $this->fakultas_id,
            'jurusan_id' => $this->jurusan_id,
            'kelas_created_date' => date("Y-m-d H:i:s"),
            'kelas_created_user_id' => Session::get('user_logged_in')->user_id,
            'kelas_created_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data kelas baru telah berhasil ditambahkan!');

        return redirect()->route('pa-kelas.index');
    }

    public function render()
    {
        $fakultass = DB::table('pa_fakultas')->get();

        $jurusans = DB::table('pa_jurusans')->get();

        return view('livewire.pa-kelas.create',[
            'fakultass' => $fakultass,
            'jurusans' => $jurusans
        ]);
    }
}
