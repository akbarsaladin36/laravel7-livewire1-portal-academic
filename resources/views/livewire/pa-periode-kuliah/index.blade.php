@section('title','List Periode Kuliah')

<div class="mt-5 ms-3">
    <div>
        <h2>List Periode Kuliah</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="#" class="btn btn-primary">Tambah Periode Kuliah</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tahun Periode Kuliah</th>
                <th scope="col">Kode Semester</th>
                <th scope="col">Nama Semester</th>
                <th scope="col">Wajib/Pilihan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                {{-- @foreach ($mahasiswa_krss as $mahasiswa_krs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mahasiswa_krs->mata_kuliah_code }}</td>
                        <td>{{ $mahasiswa_krs->mata_kuliah_name }}</td>
                        <td>{{ $mahasiswa_krs->kelas_code }}</td>
                        <td>{{ $mahasiswa_krs->sifat_mata_kuliah }}</td>
                        <td>
                            <button wire:click="destroy({{ $mahasiswa_krs->mahasiswa_krs_id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
          </table>
    </div>

</div>
