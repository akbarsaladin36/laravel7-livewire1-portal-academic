@section('title','Detail KRS')

<div class="mt-5 ms-3">
    <div>
        <h2>Detail KRS</h2>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mt-3">
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('pa-khs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <colgroup><col width="150"/><col width="500"/></colgroup>
            <tbody>
                <tr>
                    <td><b>Kode Mata Kuliah</b></td>
                    <td>{{ $mata_kuliah_kode }}</td>
                </tr>
                <tr>
                    <td><b>Nama Mata Kuliah</b></td>
                    <td>{{ $mata_kuliah_name }}</td>
                </tr>
                <tr>
                    <td><b>Dosen Pengampu</b></td>
                    <td>{{ $dosen_full_name }}</td>
                </tr>
                <tr>
                    <td><b>SKS</b></td>
                    <td>{{ $sks }}</td>
                </tr>
                <tr>
                    <td><b>Kelas Kuliah</b></td>
                    <td>{{ $kelas_kuliah_id }}</td>
                </tr>
                <tr>
                    <td><b>Nilai Minimal</b></td>
                    <td>{{ $nilai_min }}</td>
                </tr>
                <tr>
                    <td><b>Nilai Maksimal</b></td>
                    <td>{{ $nilai_max }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pa-khs.edit',['khs_id'=>$khs_id]) }}" class="btn btn-success form-control">Edit Detail</a>
    </div>
</div>
