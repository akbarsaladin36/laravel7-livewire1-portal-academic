@section('title','Edit Periode Kuliah')

<div class="mt-5 ms-3">
    <div>
        <h2>Edit Periode Kuliah</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-periode-kuliah.detail',['periode_kuliah_slug'=>$periode_kuliah_semester_slug]) }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="update" class="mt-3">
        <input type="hidden" name="periode_kuliah_semester_slug" wire:model="periode_kuliah_semester_slug">
        <div class="form-group mt-3">
            <label for="periode_kuliah_start_year_id">Start Tahun Kuliah</label>
            <input type="text" name="periode_kuliah_start_year_id" wire:model="periode_kuliah_start_year_id" id="periode_kuliah_start_year_id" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="periode_kuliah_finish_year_id">Finish Tahun Kuliah</label>
            <input type="text" name="periode_kuliah_finish_year_id" wire:model="periode_kuliah_finish_year_id" id="periode_kuliah_finish_year_id" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="periode_kuliah_semester_code">Kode Semester</label>
            <input type="text" name="periode_kuliah_semester_code" wire:model="periode_kuliah_semester_code" id="periode_kuliah_semester_code" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="periode_kuliah_semester_name">Nama Semester</label>
            <input type="text" name="periode_kuliah_semester_name" wire:model="periode_kuliah_semester_name" id="periode_kuliah_semester_name" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
    </form>

</div>
