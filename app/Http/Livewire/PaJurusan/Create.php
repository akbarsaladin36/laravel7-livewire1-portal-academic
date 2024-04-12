<?php

namespace App\Http\Livewire\PaJurusan;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{

    public $jurusan_code;
    public $jurusan_name;
    public $jurusan_description;
    public $fakultas_id;

    public function store()
    {
        $jurusan = DB::table('pa_jurusans')->insert([
            'jurusan_code' => $this->jurusan_code,
            'jurusan_name' => $this->jurusan_name,
            'jurusan_description' => $this->jurusan_description,
            'fakultas_id' => $this->fakultas_id,
            'jurusan_slug' => Str::slug($this->jurusan_name),
            'jurusan_created_date' => date('Y-m-d H:i:s'),
            'jurusan_created_user_id' => Session::get('user_logged_in')->user_id,
            'jurusan_created_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data jurusan baru telah berhasil dibuat');

        return redirect()->route('pa-jurusan.index');
    }

    public function render()
    {
        $fakultass = DB::table('pa_fakultas')->get();

        return view('livewire.pa-jurusan.create',[
            'fakultass' => $fakultass
        ]);
    }
}
