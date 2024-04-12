@section('title','Detail Fakultas')

<div class="mt-5 ms-3">
    <div>
        <h2>Detail Fakultas</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-fakultas.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <colgroup><col width="150"/><col width="500"/></colgroup>
            <tbody>
                <tr>
                    <td><b>Kode Fakultas</b></td>
                    <td>{{ $fakultas_code }}</td>
                </tr>
                <tr>
                    <td><b>Nama Fakultas</b></td>
                    <td>{{ $fakultas_name }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pa-fakultas.edit',['fakultas_slug'=>$fakultas_slug]) }}" class="btn btn-success form-control">Edit Detail</a>
    </div>
</div>
