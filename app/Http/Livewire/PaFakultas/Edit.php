<?php

namespace App\Http\Livewire\PaFakultas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{

    public $fakultas_id;
    public $fakultas_code;
    public $fakultas_name;
    public $fakultas_slug;
    public $fakultas_description;

    public function update()
    {
        $fakultas = DB::table('pa_fakultas')
                  ->where('fakultas_id',$this->fakultas_id)
                  ->update([
                    'fakultas_code' => $this->fakultas_code,
                    'fakultas_name' => $this->fakultas_name,
                    'fakultas_slug' => Str::slug($this->fakultas_name),
                    'fakultas_description' => $this->fakultas_description,
                    'fakultas_updated_date' => date("Y-m-d H:i:s"),
                    'fakultas_updated_user_id' => Session::get('user_logged_in')->user_id,
                    'fakultas_updated_username' => Session::get('user_logged_in')->user_username
                  ]);
        
        Session::flash('success','Data fakultas ini telah berhasil diupdate');

        return redirect()->route('pa-fakultas.detail',['fakultas_slug'=>Str::slug($this->fakultas_name)]);
    }

    public function mount($fakultas_slug)
    {
        $fakultas = DB::table('pa_fakultas')->where('fakultas_slug',$fakultas_slug)->first();

        $this->fakultas_id = $fakultas->fakultas_id;
        $this->fakultas_code = $fakultas->fakultas_code;
        $this->fakultas_name = $fakultas->fakultas_name;
        $this->fakultas_slug = $fakultas->fakultas_slug;
        $this->fakultas_description = $fakultas->fakultas_description;
    }

    public function render()
    {
        return view('livewire.pa-fakultas.edit');
    }
}
