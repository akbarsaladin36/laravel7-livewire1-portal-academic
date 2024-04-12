@section('title','Edit Fakultas')

<div class="mt-5 ms-3">
    <div>
        <h2>Edit Fakultas</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-fakultas.detail',['fakultas_slug'=>$fakultas_slug]) }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="update" class="mt-3">
        <input type="hidden" name="fakultas_id" wire:model="fakultas_id" id="fakultas_id">
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
        <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
    </form>

</div>
