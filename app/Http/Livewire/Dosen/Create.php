<?php

namespace App\Http\Livewire\Dosen;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $dosen_username;
    public $dosen_email;
    public $dosen_password;
    public $dosen_full_name;
    public $nidn;
    public $dosen_address;
    public $dosen_phone_number;

    public function store()
    {
        $dosen = DB::table('pa_dosens')->insert([
            'dosen_username' => $this->dosen_username,
            'dosen_email' => $this->dosen_email,
            'dosen_password' => Hash::make($this->dosen_password),
            'dosen_full_name' => $this->dosen_full_name,
            'nidn' => $this->nidn,
            'dosen_address' => $this->dosen_address,
            'dosen_phone_number' => $this->dosen_phone_number,
            'dosen_created_date' => date("Y-m-d H:i:s"),
            'dosen_created_user_id' => Session::get('user_logged_in')->user_id,
            'dosen_created_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data dosen baru sudah berhasil ditambahkan!');

        return redirect()->route('dosen.index');
    }

    public function render()
    {
        return view('livewire.dosen.create');
    }
}
