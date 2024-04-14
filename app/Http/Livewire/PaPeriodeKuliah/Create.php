<?php

namespace App\Http\Livewire\PaPeriodeKuliah;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Component;


class Create extends Component
{

    public $periode_kuliah_start_year_id;
    public $periode_kuliah_finish_year_id;
    public $periode_kuliah_semester_code;
    public $periode_kuliah_semester_name;

    public function store()
    {
        $pa_periode = DB::table('pa_periode_kuliahs')
                    ->insert([
                        'periode_kuliah_start_year_id' => $this->periode_kuliah_start_year_id,
                        'periode_kuliah_finish_year_id' => $this->periode_kuliah_finish_year_id,
                        'periode_kuliah_semester_code' => $this->periode_kuliah_semester_code,
                        'periode_kuliah_semester_name' => $this->periode_kuliah_semester_name,
                        'periode_kuliah_semester_slug' => Str::slug($this->periode_kuliah_semester_name),
                        'periode_kuliah_created_date' => date("Y-m-d H:i:s"),
                        'periode_kuliah_created_user_id' => Session::get('user_logged_in')->user_id,
                        'periode_kuliah_created_username' => Session::get('user_logged_in')->user_username,
                    ]);

        Session::flash('success','Data periode kuliah baru telah berhasil ditambahkan!');

        return redirect()->route('pa-periode-kuliah.index');
    }

    public function render()
    {
        return view('livewire.pa-periode-kuliah.create');
    }
}
