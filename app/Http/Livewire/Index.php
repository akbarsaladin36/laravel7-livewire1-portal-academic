<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $user_username;
    public $user_password;

    public function login()
    {
        $user = DB::table('users')->where('user_username',$this->user_username)->first();

        $dosen = DB::table('pa_dosens')->where('dosen_username',$this->user_username)->first();

        if($user) {
            if($user->user_status_cd=='admin') {
                if(Hash::check($this->user_password,$user->user_password)) {
                    Session::put('user_logged_in',$user);
                    Session::flash('success','Anda telah berhasil login!');
                    return redirect()->route('home.index');
                } else {
                    $this->resetField();
                    return redirect()->back()->with(['error'=>'Username/Password salah! Silakan coba lagi.']);
                }
            } else {
                if(Hash::check($this->user_password,$user->user_password)) {
                    Session::put('mahasiswa_logged_in',$user);
                    Session::flash('success','Anda telah berhasil login!');
                    return redirect()->route('user-mahasiswa.home.index');
                } else {
                    $this->resetField();
                    return redirect()->back()->with(['error'=>'Username/Password salah! Silakan coba lagi.']);
                }
            }
            // dd('Ini adalah untuk halaman user mahasiswa!');
        } else if($dosen) {
            if(Hash::check($this->user_password,$dosen->dosen_password)) {
                Session::put('dosen_logged_in',$dosen);
                Session::flash('success','Anda telah berhasil login!');
                return redirect()->route('user-dosen.home.index');
            } else {
                $this->resetField();
                return redirect()->back()->with(['error'=>'Username/Password salah! Silakan coba lagi.']);
            }
            // dd('Ini adalah untuk halaman user dosen!');
        } else {
            $this->resetField();
            return redirect()->back()->with(['error'=>'Username ini tidak terdaftar! Silakan menghubungi admin situs ini.']);
        }
    }

    public function resetField()
    {
        $this->user_username = '';
        $this->user_password = '';
    }

    public function render()
    {
        return view('livewire.index');
    }
}
