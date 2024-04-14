<?php

namespace App\Http\Livewire\PaPeriodeKuliah;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{

    public $periode_kuliah_start_year_id;
    public $periode_kuliah_finish_year_id;
    public $periode_kuliah_semester_code;
    public $periode_kuliah_semester_name;
    public $periode_kuliah_semester_slug;

    public function update()
    {
        $periode_kuliah = DB::table('pa_periode_kuliahs')
                        ->where('periode_kuliah_semester_slug',$this->periode_kuliah_semester_slug)
                        ->update([
                            'periode_kuliah_start_year_id' => $this->periode_kuliah_start_year_id,
                            'periode_kuliah_finish_year_id' => $this->periode_kuliah_finish_year_id,
                            'periode_kuliah_semester_code' => $this->periode_kuliah_semester_code,
                            'periode_kuliah_semester_name' => $this->periode_kuliah_semester_name,
                            'periode_kuliah_semester_slug' => Str::slug($this->periode_kuliah_semester_name),
                            'periode_kuliah_updated_date' => date("Y-m-d H:i:s"),
                            'periode_kuliah_updated_user_id' => Session::get('user_logged_in')->user_id,
                            'periode_kuliah_updated_username' => Session::get('user_logged_in')->user_username,
                        ]);

        Session::flash('success','Data periode kuliah ini telah berhasil diupdate!');

        return redirect()->route('pa-periode-kuliah.detail',['periode_kuliah_slug'=>Str::slug($this->periode_kuliah_semester_name)]);
    }

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
        return view('livewire.pa-periode-kuliah.edit');
    }
}
