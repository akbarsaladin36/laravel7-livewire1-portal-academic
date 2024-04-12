<?php

namespace App\Http\Livewire\PaKhs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $nilai_max;
    public $nilai_min;
    public $krs_id;

    public function store()
    {
        $pa_khs = DB::table('pa_khs')->insert([
            'nilai_max' => $this->nilai_max,
            'nilai_min' => $this->nilai_min,
            'krs_id' => $this->krs_id,
            'khs_created_date' => date("Y-m-d H:i:s"),
            'khs_created_user_id' => Session::get('user_logged_in')->user_id,
            'khs_created_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data KHS baru telah berhasil ditambahkan!');

        return redirect()->route('pa-khs.index');
    }

    public function render()
    {
        $krss = DB::table('pa_krs')->get();

        return view('livewire.pa-khs.create',[
            'krss' => $krss
        ]);
    }
}
