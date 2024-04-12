<?php

namespace App\Http\Livewire\Dosen;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{
    public $dosen_username;
    public $dosen_email;
    public $dosen_fullname;
    public $nidn;
    public $dosen_address;
    public $dosen_phone_number;

    public function mount($username_dosen)
    {
        $dosen = DB::table('pa_dosens')->where('dosen_username',$username_dosen)->first();

        $this->dosen_username = $dosen->dosen_username;
        $this->dosen_email = $dosen->dosen_email;
        $this->dosen_fullname = $dosen->dosen_full_name;
        $this->nidn = $dosen->nidn;
        $this->dosen_address = $dosen->dosen_address;
        $this->dosen_phone_number = $dosen->dosen_phone_number;
    }

    public function render()
    {
        return view('livewire.dosen.detail');
    }
}
