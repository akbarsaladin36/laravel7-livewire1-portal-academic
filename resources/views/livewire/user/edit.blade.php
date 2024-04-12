@section('title','Detail User')

<div class="mt-5 ms-3">
    <div>
        <h2>Detail User</h2>
    </div>

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

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
                    <td><b>NIM</b></td>
                    <td>{{ $user_nim }}</td>
                </tr>
                <tr>
                    <td><b>NIK</b></td>
                    <td>{{ $user_nik }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>{{ $user_address }}</td>
                </tr>
                <tr>
                    <td><b>Nomor Handphone</b></td>
                    <td>{{ $user_phone_number }}</td>
                </tr>
                <tr>
                    <td><b>Agama</b></td>
                    <td>{{ $user_religion }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ayah</b></td>
                    <td>{{ $user_father_name }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ibu</b></td>
                    <td>{{ $user_mother_name }}</td>
                </tr>
                <tr>
                    <td><b>Alamat Orang Tua</b></td>
                    <td>{{ $user_father_address }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
