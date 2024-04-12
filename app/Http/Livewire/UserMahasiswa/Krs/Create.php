<?php

namespace App\Http\Livewire\UserMahasiswa\Krs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $krs_id;

    public function store()
    {
        $krs = DB::table('pa_mahasiswa_krs')->insert([
            'krs_id' => $this->krs_id,
            'mahasiswa_krs_created_date' => date("Y-m-d H:i:s"),
            'mahasiswa_krs_created_user_id' => Session::get('mahasiswa_logged_in')->user_id,
            'mahasiswa_krs_created_username' => Session::get('mahasiswa_logged_in')->user_username
        ]);

        Session::flash('success','Data krs mahasiswa baru telah berhasil ditambahkan!');

        return redirect()->route('user-mahasiswa.krs.index');
    }

    public function render()
    {
        $krss = DB::table('pa_krs')->get();

        return view('livewire.user-mahasiswa.krs.create',[
            'krss' => $krss
        ]);
    }
}
