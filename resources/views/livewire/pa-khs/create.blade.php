@section('title','Tambah KHS Baru')

<div class="mt-5 ms-3">
    <div>
        <h2>Tambah KHS Baru</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-khs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="form-group mt-3">
            <label for="nilai_max">Nilai Maksimal</label>
            <input type="text" name="nilai_max" wire:model="nilai_max" id="nilai_max" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="nilai_min">Nilai Minimal</label>
            <input type="text" name="nilai_min" wire:model="nilai_min" id="nilai_min" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="krs_id">KRS</label>
            <select class="form-select" name="krs_id" wire:model="krs_id">
                <option value="Wajib" selected>Pilih KRS</option>
                @foreach ($krss as $krs)
                    <option value="{{ $krs->krs_id }}">{{ $krs->mata_kuliah_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Tambah</button>
    </form>

</div>
