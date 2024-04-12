@section('title','Tambah Kelas Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah Kelas Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-kelas.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="kelas_code">Kode Kelas</label>
            <input type="text" name="kelas_code" wire:model="kelas_code" id="kelas_code" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="kelas_name">Nama Kelas</label>
            <input type="text" name="kelas_name" wire:model="kelas_name" id="kelas_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="jumlah_mahasiswa">Jumlah Mahasiswa</label>
            <input type="text" name="jumlah_mahasiswa" wire:model="jumlah_mahasiswa" id="jumlah_mahasiswa" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="fakultas_id">Fakultas</label>
            <select class="form-select" name="fakultas_id" wire:model="fakultas_id">
                <option value="tidak-ada-fakultas" selected>Pilih Fakultas</option>
                @foreach ($fakultass as $fakultas)
                    <option value="{{ $fakultas->fakultas_id }}">{{ $fakultas->fakultas_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="jurusan_id">Jurusan</label>
            <select class="form-select" name="jurusan_id" wire:model="jurusan_id">
                <option value="tidak-ada-jurusan" selected>Pilih Fakultas</option>
                @foreach ($jurusans as $jurusan)
                    <option value="{{ $jurusan->jurusan_id }}">{{ $jurusan->jurusan_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
