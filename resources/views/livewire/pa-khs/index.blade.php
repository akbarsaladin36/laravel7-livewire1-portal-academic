@section('title','List KHS')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua KHS</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-khs.create') }}" class="btn btn-primary">Tambah KHS</a>
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
                @foreach ($khss as $khs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $khs->mata_kuliah_code}}</td>
                        <td>{{ $khs->mata_kuliah_name }}</td>
                        <td>{{ $khs->kelas_kuliah_id }}</td>
                        <td>{{ $khs->sifat_mata_kuliah }}</td>
                        <td>{{ $khs->sks }}</td>
                        <td>
                            <a href="{{ route('pa-khs.detail',['khs_id'=>$khs->khs_id]) }}" class="btn btn-success">Detail</a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
