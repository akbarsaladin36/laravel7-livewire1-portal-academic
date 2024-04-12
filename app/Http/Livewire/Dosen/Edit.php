<?php

namespace App\Http\Livewire\Dosen;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $dosen_id;
    public $dosen_username;
    public $dosen_email;
    public $dosen_full_name;
    public $nidn;
    public $dosen_address;
    public $dosen_phone_number;

    public function update()
    {

        $dosen = DB::table('pa_dosens')
               ->where('dosen_id',$this->dosen_id)
               ->update([
                'dosen_username' => $this->dosen_username,
                'dosen_email' => $this->dosen_email,
                'dosen_full_name' => $this->dosen_full_name,
                'nidn' => $this->nidn,
                'dosen_address' => $this->dosen_address,
                'dosen_phone_number' => $this->dosen_phone_number,
                'dosen_updated_date' => date("Y-m-d H:i:s"),
                'dosen_updated_user_id' => Session::get('user_logged_in')->user_id,
                'dosen_updated_username' => Session::get('user_logged_in')->user_username
               ]);
        
        Session::flash('success','Data dosen ini sudah berhasil diupdate!');

        return redirect()->route('dosen.detail',['username_dosen'=>$this->dosen_username]);
    }

    public function mount($username_dosen)
    {
        $dosen = DB::table('pa_dosens')->where('dosen_username',$username_dosen)->first();

        $this->dosen_id = $dosen->dosen_id;
        $this->dosen_username = $dosen->dosen_username;
        $this->dosen_email = $dosen->dosen_email;
        $this->dosen_full_name = $dosen->dosen_full_name;
        $this->nidn = $dosen->nidn;
        $this->dosen_address = $dosen->dosen_address;
        $this->dosen_phone_number = $dosen->dosen_phone_number;
    }

    public function render()
    {
        return view('livewire.dosen.edit');
    }
}
