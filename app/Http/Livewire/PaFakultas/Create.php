<?php

namespace App\Http\Livewire\PaFakultas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{

    public $fakultas_code;
    public $fakultas_name;
    public $fakultas_description;

    public function store()
    {
        $fakultas = DB::table('pa_fakultas')->insert([
            'fakultas_code' => $this->fakultas_code,
            'fakultas_name' => $this->fakultas_name,
            'fakultas_slug' => Str::slug($this->fakultas_name),
            'fakultas_description' => $this->fakultas_description,
            'fakultas_created_date' => date("Y-m-d H:i:s"),
            'fakultas_created_user_id' => Session::get('user_logged_in')->user_id,
            'fakultas_created_username' => Session::get('user_logged_in')->user_username
        ]);

        Session::flash('success','Data fakultas baru telah berhasil ditambahkan!');

        return redirect()->route('pa-fakultas.index');
    }

    public function render()
    {
        return view('livewire.pa-fakultas.create');
    }
}
