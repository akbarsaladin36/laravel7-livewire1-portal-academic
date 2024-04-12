@section('title','List Fakultas')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua Fakultas</h2>
    </div>
    
    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-fakultas.create') }}" class="btn btn-primary">Tambah Fakultas</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Fakultas</th>
                <th scope="col">Nama Fakultas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fakultass as $fakultas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $fakultas->fakultas_code}}</td>
                        <td>{{ $fakultas->fakultas_name }}</td>
                        <td>
                            <a href="{{ route('pa-fakultas.detail',['fakultas_slug'=>$fakultas->fakultas_slug]) }}" class="btn btn-success">Detail</a>
                            <button wire:click="delete({{ $fakultas->fakultas_id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
