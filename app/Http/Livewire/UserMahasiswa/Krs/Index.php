<?php

namespace App\Http\Livewire\UserMahasiswa\Krs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public function destroy($mahasiswa_krs_id)
    {
        $mahasiswa_krs = DB::table('pa_mahasiswa_krs')->where('mahasiswa_krs_id',$mahasiswa_krs_id);

        if($mahasiswa_krs) {
            $mahasiswa_krs->delete();
            Session::flash('success','Data ini telah berhasil dihapus!');
            return redirect()->back();
        }
    }

    public function render()
    {
        $logged_mahasiswa_id = Session::get('mahasiswa_logged_in')->user_id;

        $mahasiswa_krss = DB::table('pa_mahasiswa_krs')
                        ->join('pa_krs','pa_krs.krs_id','=','pa_mahasiswa_krs.krs_id')
                        ->join('pa_kelas','pa_kelas.kelas_id','=','pa_krs.kelas_kuliah_id')
                        ->where('pa_mahasiswa_krs.mahasiswa_krs_created_user_id',$logged_mahasiswa_id)
                        ->get();

        $no = 1;

        $total_count_sks = DB::table('pa_mahasiswa_krs')
                        ->join('pa_krs','pa_krs.krs_id','=','pa_mahasiswa_krs.krs_id')
                        ->join('pa_kelas','pa_kelas.kelas_id','=','pa_krs.kelas_kuliah_id')
                        ->where('pa_mahasiswa_krs.mahasiswa_krs_created_user_id',$logged_mahasiswa_id)
                        ->sum('pa_krs.sks');

        return view('livewire.user-mahasiswa.krs.index',[
            'mahasiswa_krss' => $mahasiswa_krss,
            'no' => $no,
            'total_count_sks' => $total_count_sks
        ]);
    }
}
