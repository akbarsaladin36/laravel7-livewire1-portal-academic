@section('title','List Kelas')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua Kelas</h2>
    </div>
    
    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Kelas</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kelass as $kelas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kelas->kelas_code}}</td>
                        <td>{{ $kelas->kelas_name }}</td>
                        <td>
                            <a href="{{ route('pa-kelas.detail',['kelas_id'=>$kelas->kelas_id]) }}" class="btn btn-success">Detail</a>
                            <button wire:click="#" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
