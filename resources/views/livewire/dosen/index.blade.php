@section('title','List Dosen')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua Dosen</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Tanggal Daftar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $dosen)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dosen->dosen_username}}</td>
                        <td>{{ $dosen->dosen_created_date }}</td>
                        <td>
                            <a href="{{ route('dosen.detail',['username_dosen'=>$dosen->dosen_username]) }}" class="btn btn-success">Detail</a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
