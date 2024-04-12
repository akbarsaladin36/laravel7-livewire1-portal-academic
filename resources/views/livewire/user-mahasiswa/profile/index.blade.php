@section('title','Profil/Data Diri Mahasiswa')

<div class="mt-5 ms-3">
    <div>
        <h2>Profil/Data Diri Mahasiswa</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <table class="table table-bordered">
            <colgroup><col width="150"/><col width="500"/></colgroup>
            <tbody>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td>{{ $user_fullname }}</td>
                </tr>
                <tr>
                    <td><b>Username</b></td>
                    <td>{{ $user_username }}</td>
                </tr>
                <tr>
                    <td><b>E-mail</b></td>
                    <td>{{ $user_email }}</td>
                </tr>
                <tr>
                    <td><b>NIK</b></td>
                    <td>{{ $user_nik }}</td>
                </tr>
                <tr>
                    <td><b>NIM</b></td>
                    <td>{{ $user_nim }}</td>
                </tr>
                <tr>
                    <td><b>Fakultas</b></td>
                    <td>{{ $user_fakultas_name }}</td>
                </tr>
                <tr>
                    <td><b>Jurusan</b></td>
                    <td>{{ $user_jurusan_name }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>{{ $user_address }}</td>
                </tr>
                <tr>
                    <td><b>Nomor Handphone Mahasiswa</b></td>
                    <td>{{ $user_phone_number }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('user-mahasiswa.profile.edit',['username'=>$user_username]) }}" class="btn btn-success form-control">Edit Profile</a>
    </div>
</div>
