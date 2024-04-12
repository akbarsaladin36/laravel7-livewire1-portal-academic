@section('title','Tambah KRS Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah KRS Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="mata_kuliah_code">Kode Mata Kuliah</label>
            <input type="text" name="mata_kuliah_code" wire:model="mata_kuliah_code" id="mata_kuliah_code" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="mata_kuliah_name">Nama Mata Kuliah</label>
            <input type="text" name="mata_kuliah_name" wire:model="mata_kuliah_name" id="mata_kuliah_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="kelas_kuliah_id">Kelas</label>
            <select class="form-select" name="kelas_kuliah_id" wire:model="kelas_kuliah_id">
                <option value="0" selected>Pilih Kelas</option>
                @foreach ($kelass as $kelas)
                    <option value="{{ $kelas->kelas_id }}">{{ $kelas->kelas_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="dosen_id">Dosen</label>
            <select class="form-select" name="dosen_id" wire:model="dosen_id">
                <option value="0" selected>Pilih Dosen</option>
                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->dosen_id }}">{{ $dosen->dosen_full_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="sifat_mata_kuliah">Sifat Mata Kuliah</label>
            <select class="form-select" name="sifat_mata_kuliah" wire:model="sifat_mata_kuliah">
                <option value="Wajib" selected>Pilih Sifat Mata Kuliah</option>
                <option value="wajib">Wajib</option>
                <option value="pilihan">Pilihan</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="sks">SKS</label>
            <input type="text" name="sks" wire:model="sks" id="sks" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
