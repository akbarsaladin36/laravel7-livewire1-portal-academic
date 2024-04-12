<?php

namespace App\Http\Livewire\PaFakultas;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $fakultas_code;
    public $fakultas_name;
    public $fakultas_slug;

    public function mount($fakultas_slug)
    {
        $fakultas = DB::table('pa_fakultas')->where('fakultas_slug',$fakultas_slug)->first();

        $this->fakultas_code = $fakultas->fakultas_code;
        $this->fakultas_name = $fakultas->fakultas_name;
        $this->fakultas_slug = $fakultas->fakultas_slug;
    }

    public function render()
    {
        return view('livewire.pa-fakultas.detail');
    }
}
