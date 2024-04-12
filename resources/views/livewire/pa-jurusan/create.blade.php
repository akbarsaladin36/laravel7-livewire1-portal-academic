@section('title','Tambah Jurusan Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah Jurusan Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-jurusan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="jurusan_code">Kode Jurusan</label>
            <input type="text" name="jurusan_code" wire:model="jurusan_code" id="jurusan_code" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="jurusan_name">Nama Jurusan</label>
            <input type="text" name="jurusan_name" wire:model="jurusan_name" id="jurusan_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="jurusan_description">Deskripsi Jurusan</label>
            <textarea name="jurusan_description" wire:model="jurusan_description" id="jurusan_description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="fakultas_id">Fakultas</label>
            <select class="form-select" name="fakultas_id" wire:model="fakultas_id">
                <option value="0" selected>Pilih Fakultas</option>
                @foreach ($fakultass as $fakultas)
                    <option value="{{ $fakultas->fakultas_id }}">{{ $fakultas->fakultas_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
