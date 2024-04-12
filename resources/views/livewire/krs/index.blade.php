@section('title','List KRS')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua KRS</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('krs.create') }}" class="btn btn-primary">Tambah KRS</a>
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
                @foreach ($krss as $krs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $krs->mata_kuliah_code}}</td>
                        <td>{{ $krs->mata_kuliah_name }}</td>
                        <td>{{ $krs->kelas_code }}</td>
                        <td>{{ $krs->sifat_mata_kuliah }}</td>
                        <td>{{ $krs->sks }}</td>
                        <td>
                            <a href="{{ route('krs.detail',['krs_id'=>$krs->krs_id]) }}" class="btn btn-success">Detail</a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
