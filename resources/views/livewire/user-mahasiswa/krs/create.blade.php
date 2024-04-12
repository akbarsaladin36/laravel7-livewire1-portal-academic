@section('title','Tambah KRS Mahasiswa Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah KRS Mahasiswa Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('user-mahasiswa.krs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="krs_id">Kelas</label>
            <select class="form-select" name="krs_id" wire:model="krs_id">
                <option value="0" selected>Pilih KRS</option>
                @foreach ($krss as $krs)
                    <option value="{{ $krs->krs_id }}">{{ $krs->mata_kuliah_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
