@section('title','List Periode Kuliah')

<div class="mt-5 ms-3">
    <div>
        <h2>List Periode Kuliah</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-periode-kuliah.create') }}" class="btn btn-primary">Tambah Periode Kuliah</a>
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
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($periode_kuliahs as $periode_kuliah)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $periode_kuliah->periode_kuliah_start_year_id }}</td>
                        <td>{{ $periode_kuliah->periode_kuliah_semester_code }}</td>
                        <td>{{ $periode_kuliah->periode_kuliah_semester_name }}</td>
                        <td>
                            <a href="{{ route('pa-periode-kuliah.detail',['periode_kuliah_slug'=>$periode_kuliah->periode_kuliah_semester_slug]) }}" class="btn btn-success">Edit</a>
                            <button wire:click="delete('{{ $periode_kuliah->periode_kuliah_semester_slug }}')" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
