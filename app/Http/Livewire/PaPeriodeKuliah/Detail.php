<?php

namespace App\Http\Livewire\PaPeriodeKuliah;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{

    public $periode_kuliah_start_year_id;
    public $periode_kuliah_finish_year_id;
    public $periode_kuliah_semester_code;
    public $periode_kuliah_semester_name;
    public $periode_kuliah_semester_slug;

    public function mount($periode_kuliah_slug) 
    {
        $periode_kuliah = DB::table('pa_periode_kuliahs')
                        ->where('periode_kuliah_semester_slug',$periode_kuliah_slug)
                        ->first();

        // dd($periode_kuliah);

        $this->periode_kuliah_start_year_id = $periode_kuliah->periode_kuliah_start_year_id;
        $this->periode_kuliah_finish_year_id = $periode_kuliah->periode_kuliah_finish_year_id;
        $this->periode_kuliah_semester_code = $periode_kuliah->periode_kuliah_semester_code;
        $this->periode_kuliah_semester_name = $periode_kuliah->periode_kuliah_semester_name;
        $this->periode_kuliah_semester_slug = $periode_kuliah->periode_kuliah_semester_slug;
    }


    public function render()
    {
        return view('livewire.pa-periode-kuliah.detail');
    }
}
