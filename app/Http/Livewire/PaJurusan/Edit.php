<?php

namespace App\Http\Livewire\PaJurusan;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    
    public $jurusan_id;
    public $jurusan_code;
    public $jurusan_name;
    public $jurusan_slug;
    public $jurusan_description;
    public $fakultas_id;

    public function update()
    {
        $jurusan = DB::table('pa_jurusans')
                 ->where('jurusan_id',$this->jurusan_id)
                 ->update([
                    'jurusan_code' => $this->jurusan_code,
                    'jurusan_name' => $this->jurusan_name,
                    'jurusan_slug' => Str::slug($this->jurusan_name),
                    'jurusan_description' => $this->jurusan_description,
                    'fakultas_id' => $this->fakultas_id,
                    'jurusan_updated_date' => date("Y-m-d H:i:s"),
                    'jurusan_updated_user_id' => Session::get('user_logged_in')->user_id,
                    'jurusan_updated_username' => Session::get('user_logged_in')->user_username
                 ]);

        Session::flash('success','Data jurusan ini telah berhasil diupdate!');

        return redirect()->route('pa-jurusan.detail',['jurusan_slug'=>Str::slug($this->jurusan_name)]);
    }

    public function mount($jurusan_slug) {

        $jurusan = DB::table('pa_jurusans')->where('jurusan_slug',$jurusan_slug)->first();

        $this->jurusan_id = $jurusan->jurusan_id;
        $this->jurusan_code = $jurusan->jurusan_code;
        $this->jurusan_name = $jurusan->jurusan_name;
        $this->jurusan_slug = $jurusan->jurusan_slug;
        $this->jurusan_description = $jurusan->jurusan_description;
        $this->fakultas_id = $jurusan->fakultas_id;
    }

    public function render()
    {

        $fakultass = DB::table('pa_fakultas')->get();

        return view('livewire.pa-jurusan.edit',[
            'fakultass' => $fakultass
        ]);
    }
}
