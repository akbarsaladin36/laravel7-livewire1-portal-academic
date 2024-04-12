<?php

namespace App\Http\Livewire\PaJurusan;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $jurusan_code;
    public $jurusan_name;
    public $jurusan_slug;

    public function mount($jurusan_slug)
    {
        $jurusan = DB::table('pa_jurusans')->where('jurusan_slug',$jurusan_slug)->first();

        $this->jurusan_code = $jurusan->jurusan_code;
        $this->jurusan_name = $jurusan->jurusan_name;
        $this->jurusan_slug = $jurusan->jurusan_slug;
    }

    public function render()
    {
        return view('livewire.pa-jurusan.detail');
    }
}
