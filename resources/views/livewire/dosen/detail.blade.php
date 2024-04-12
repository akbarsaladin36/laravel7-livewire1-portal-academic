@section('title','Detail Dosen')

<div class="mt-5 ms-3">
    <div>
        <h2>Detail Dosen</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <colgroup><col width="150"/><col width="500"/></colgroup>
            <tbody>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td>{{ $dosen_fullname }}</td>
                </tr>
                <tr>
                    <td><b>Username Dosen</b></td>
                    <td>{{ $dosen_username }}</td>
                </tr>
                <tr>
                    <td><b>E-mail Dosen</b></td>
                    <td>{{ $dosen_email }}</td>
                </tr>
                <tr>
                    <td><b>NIDN</b></td>
                    <td>{{ $nidn }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>{{ $dosen_address }}</td>
                </tr>
                <tr>
                    <td><b>Nomor Handphone Dosen</b></td>
                    <td>{{ $dosen_phone_number }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('dosen.edit',['username_dosen'=>$dosen_username]) }}" class="btn btn-success form-control">Edit Detail</a>
    </div>
</div>
