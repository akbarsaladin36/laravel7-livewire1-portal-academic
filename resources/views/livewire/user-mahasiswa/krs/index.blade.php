@section('title','List KRS Mahasiswa')

<div class="mt-5 ms-3">
    <div>
        <h2>List KRS Mahasiswa</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('user-mahasiswa.krs.create') }}" class="btn btn-primary">Tambah KRS</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Kuliah</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Wajib/Pilihan</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa_krss as $mahasiswa_krs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mahasiswa_krs->mata_kuliah_code }}</td>
                        <td>{{ $mahasiswa_krs->mata_kuliah_name }}</td>
                        <td>{{ $mahasiswa_krs->kelas_code }}</td>
                        <td>{{ $mahasiswa_krs->sifat_mata_kuliah }}</td>
                        <td>{{ $mahasiswa_krs->sks }}</td>
                        <td>
                            <button wire:click="destroy({{ $mahasiswa_krs->mahasiswa_krs_id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="text-center" colspan="5">Total</td>
                    <td>{{ $total_count_sks }}</td>
                    <td></td>
                </tr>
            </tbody>
          </table>
    </div>

</div>
