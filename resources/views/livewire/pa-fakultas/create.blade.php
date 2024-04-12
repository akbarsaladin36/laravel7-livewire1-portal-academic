@section('title','Tambah Fakultas Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah Fakultas Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-fakultas.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="fakultas_code">Kode Fakultas</label>
            <input type="text" name="fakultas_code" wire:model="fakultas_code" id="fakultas_code" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="fakultas_name">Nama Fakultas</label>
            <input type="text" name="fakultas_name" wire:model="fakultas_name" id="fakultas_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="fakultas_description">Deskripsi Fakultas</label>
            <textarea name="fakultas_description" wire:model="fakultas_description" id="fakultas_description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
