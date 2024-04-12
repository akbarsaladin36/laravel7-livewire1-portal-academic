<?php

namespace App\Http\Livewire\PaKelas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $kelas_code;
    public $kelas_name;
    public $jumlah_mahasiswa;
    public $fakultas_id;
    public $jurusan_id;
    public $kelas_id;

    public function update()
    {
        $kelas = DB::table('pa_kelas')
               ->where('kelas_id',$this->kelas_id)
               ->update([
                'kelas_code' => $this->kelas_code,
                'kelas_name' => $this->kelas_name,
                'jumlah_mahasiswa' => $this->jumlah_mahasiswa,
                'fakultas_id' => $this->fakultas_id,
                'jurusan_id' => $this->jurusan_id,
                'kelas_updated_date' => date("Y-m-d H:i:s"),
                'kelas_updated_user_id' => Session::get('user_logged_in')->user_id,
                'kelas_updated_username' => Session::get('user_logged_in')->user_username
               ]);

        Session::flash('success','Data kelas ini telah berhasil diupdate');

        return redirect()->route('pa-kelas.detail',['kelas_id'=>$this->kelas_id]);
    }

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
        $this->fakultas_id = $kelas->fakultas_id;
        $this->jurusan_id = $kelas->jurusan_id;
        $this->kelas_id = $kelas->kelas_id;
    }

    public function render()
    {
        $fakultass = DB::table('pa_fakultas')->get();

        $jurusans = DB::table('pa_jurusans')->get();

        return view('livewire.pa-kelas.edit',[
            'fakultass' => $fakultass,
            'jurusans' => $jurusans
        ]);
    }
}
