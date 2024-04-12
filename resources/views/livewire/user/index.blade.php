@section('title','List Mahasiswa')

<div class="mt-5 ms-3">
    <div>
        <h2>List Semua Mahasiswa</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama User</th>
                <th scope="col">Tanggal Daftar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->user_username}}</td>
                        <td>{{ $user->user_created_date }}</td>
                        <td>
                            @if($user->user_id!=Session::get('user_logged_in')->user_id)
                                <a href="{{ route('users.edit',['username'=>$user->user_username]) }}" class="btn btn-success">Detail</a>
                                <button class="btn btn-danger">Delete</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>
